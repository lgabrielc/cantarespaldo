<?php

namespace App\Http\Livewire\Admin\GestionarIncidencias\HistorialIncidencia;

use App\Models\Tipoincidencia;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class ShowHistorialIncidencia extends Component
{
    use WithPagination;
    public $searchdate, $searchdate2, $totalincidencias;
    public $sort = 'id', $search, $direction = 'desc', $cant = '5';

    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function render()
    {
        $this->totalincidencias = Tipoincidencia::all();
        DB::statement("SET lc_time_names = 'es_PE'");
        $incidencias = DB::table('incidencias')
            ->select(
                'incidencias.id as id',
                'clientes.nombre as nombre',
                'clientes.apellido as apellido',
                'incidencias.descripcion as descripcion',
                'tipoincidencias.nombre as tipoincidencia',
                'estados.nombre as estadonombre',
                'estados.id as estadoid',
                DB::raw(
                    'DATE_FORMAT(incidencias.fecha, "Para el %W %d a las %l:%i%p") as fecha',
                )
            )
            ->join('clientes', 'clientes.id', '=', 'incidencias.cliente_id')
            ->join('tipoincidencias', 'tipoincidencias.id', '=', 'incidencias.tipoincidencia_id')
            ->join('estados', 'estados.id', '=', 'incidencias.estado_id')
            ->where(function ($q) {
                $q->where('incidencias.estado_id', '11');
            })
            ->where(function ($q) {
                $q->where('clientes.nombre', 'like', '%' . $this->search . '%')
                    ->orwhere('clientes.apellido', 'like', '%' . $this->search . '%')
                    ->orwhere('estados.nombre', 'like', '%' . $this->search . '%');
            })
            ->where(function ($query) {
                if ($this->searchdate) {
                    $query->whereBetween('incidencias.fecha', [$this->searchdate, $this->searchdate2])
                        ->orWhereDate('incidencias.fecha', $this->searchdate);
                }
            })
            ->orderBy($this->sort, $this->direction)
            ->paginate($this->cant);
        return view('livewire.admin.gestionar-incidencias.historial-incidencia.show-historial-incidencia')->with('incidencias', $incidencias);
    }
}
