<?php

namespace App\Http\Livewire\Admin\GestionarIncidencias\AgendaIncidencia;

use App\Models\Cliente;
use App\Models\Estado;
use App\Models\Incidencia;
use App\Models\Tipoincidencia;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class ShowIncidencia extends Component
{
    use WithPagination;
    public $clienteid = '', $clienteselectname, $fecha, $descripcion, $tipoincidenciaid, $disabled2,
        $nombre, $estadoid, $searchdate, $searchdate2, $tipoincidencianombre, $totaltipoincidencias, $tipoincidenciausadopor, $nombrecompleto;
    public $sort = 'id', $search, $direction = 'desc', $cant = '5';
    public $totalestados, $incidenciaid, $fechareprogramada, $estareprogramando,$totalincidenciashoy,$totalincidenciasprogramadas,
        $vermodaleditar = false,
        $vermodalcreartipoincidencia = false,
        $vermodalcrear = false,
        $vermodaleditartipoincidencia = false,
        $vermodalreprogramarincidencia = false;
    public function mount()
    {
        $this->totalestados = Estado::where('nombre', "=", 'Activo')->orwhere('nombre', "=", 'Deshabilitado')->get();
        $this->totalincidenciashoy = Incidencia::where(function ($q) {
            $q->where('estado_id', '9')
                ->orWhere('estado_id', '10');
        })
            ->whereDate('fecha', date('Y-m-d'))
            ->count();
        $this->totalincidenciasprogramadas = Incidencia::where(function ($q) {
            $q->where('estado_id', '9')
                ->orWhere('estado_id', '10');
        })->count();
    }
    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function activarmodalcrear()
    {
        $this->reset('descripcion', 'tipoincidenciaid', 'fecha');
        $this->vermodalcrear = true;
        $this->dispatchBrowserEvent('name-updated');
    }
    public function activarmodalcreartipoincidencia()
    {
        $this->reset('nombre');
        $this->estadoid = '1';
        $this->vermodalcreartipoincidencia = true;
        $this->dispatchBrowserEvent('name-updated');
    }
    public function activarmodaleditartipoincidencia()
    {
        $this->tipoincidenciaid = '';
        $this->reset('nombre');
        $this->disabled2 = 1;
        $this->vermodaleditartipoincidencia = true;
    }
    public function save()
    {
        $this->validate([
            'fecha' => 'required',
            'descripcion' => 'required',
            'clienteid' => 'required',
            'tipoincidenciaid' => 'required',
        ]);
        $incidencia = new Incidencia();
        $incidencia->fecha = $this->fecha;
        $incidencia->descripcion = $this->descripcion;
        $incidencia->cliente_id = $this->clienteid;
        $incidencia->tipoincidencia_id = $this->tipoincidenciaid;
        $incidencia->estado_id = '9';
        $incidencia->save();
        $this->vermodalcrear = false;
        $this->mount();
        $this->emit('alert', 'La incidencia se agendó con éxito');
    }
    public function savetipoincidencia()
    {
        $this->validate([
            'nombre' => 'required',
            'estadoid' => 'required',
        ]);
        $tipoincidencia = new Tipoincidencia();
        $tipoincidencia->nombre = $this->nombre;
        $tipoincidencia->estado_id = $this->estadoid;
        $tipoincidencia->save();
        $this->vermodalcreartipoincidencia = false;
        $this->emit('alert', 'El tipo de incidencia se agregó con éxito');
    }
    public function deletetipoincidencia()
    {
        Tipoincidencia::find($this->tipoincidenciaid)->delete();
        $this->vermodaleditartipoincidencia = false;
    }
    public function deleteincidencia(Incidencia $incidencia){
        $incidencia->delete();
        $this->mount();
    }
    public function updatetipoincidencia()
    {
        $this->validate([
            'tipoincidenciaid' => 'required',
            'nombre' => 'required',
            'estadoid' => 'required',
        ]);
        $tipoincidencia = Tipoincidencia::find($this->tipoincidenciaid);
        $tipoincidencia->nombre = $this->nombre;
        $tipoincidencia->estado_id = $this->estadoid;
        $tipoincidencia->save();
        $this->vermodaleditartipoincidencia = false;
        $this->emit('alert', 'El tipo de incidencia se actualizó con éxito');
    }
    public function changetipoincidenciaselect()
    {
        if (is_numeric($this->tipoincidenciaid)) {
            $obj = Tipoincidencia::find($this->tipoincidenciaid);
            $this->nombre = $obj->nombre;
            $this->disabled2 = 0;

            $this->tipoincidenciausadopor = $obj->incidencias()->count();
        } else {
            $this->reset('nombre', 'tipoincidenciausadopor');
            $this->disabled2 = 1;
        }
    }
    public function abrirmodalreprogramar(Incidencia $incidencia)
    {
        $this->reset('fechareprogramada', 'fecha', 'estareprogramando');
        $this->fecha = $incidencia->fecha;
        $this->fechareprogramada = $incidencia->fecha;
        $this->incidenciaid = $incidencia->id;
        $this->descripcion = $incidencia->descripcion;
        $this->clienteid = $incidencia->cliente_id;
        // $this->nombrecompleto = Cliente::find($incidencia->cliente_id);
        // $this->nombrecompleto = $this->nombrecompleto->nombre . '' . $this->nombrecompleto->apellido;
        $this->nombrecompleto = $incidencia->cliente->nombre . ' ' . $incidencia->cliente->apellido;
        $this->tipoincidenciaid = $incidencia->tipoincidencia_id;
        $this->tipoincidencianombre = $incidencia->tipoincidencia->nombre;
        $this->vermodalreprogramarincidencia = true;
        $this->fecha = Carbon::parse($incidencia->fecha)->format('Y-m-d\TH:i');
    }
    public function reprogramarthisincidencia(Incidencia $incidencia)
    {
        $this->validate([
            'fecha' => 'required',
            'descripcion' => 'required',
        ]);
        $incidencia->fecha = $this->fecha;
        $incidencia->descripcion = $this->descripcion;
        $incidencia->estado_id = '10';
        $incidencia->save();
        $this->vermodalreprogramarincidencia = false;
        $this->mount();

    }
    public function editincidencia()
    {
        $this->validate([
            'fecha' => 'required',
            'descripcion' => 'required',
            'clienteid' => 'required',
            'tipoincidenciaid' => 'required',
        ]);
        $incidencia = Incidencia::find($this->incidenciaid);
        $incidencia->fecha = $this->fecha;
        $incidencia->descripcion = $this->descripcion;
        $incidencia->cliente_id = $this->clienteid;
        $incidencia->tipoincidencia_id = $this->tipoincidenciaid;
        $incidencia->save();
        $this->vermodalreprogramarincidencia = false;
        $this->emit('alert', 'La Incidencia se actualizó con éxito');
    }
    public function changeverificarcambiodefecha()
    {
        if ($this->fecha != $this->fechareprogramada) {
            $this->estareprogramando = 1;
        } else {
            $this->reset('estareprogramando');
        }
    }
    public function confirmarincidenciaterminada(Incidencia $incidencia)
    {
        $incidencia->estado_id = '11';
        $incidencia->save();
        $this->mount();

    }
    public function order($sort)
    {
        if ($sort == $this->sort) {
            if ($this->direction == 'desc') {
                $this->direction = 'asc';
            } else {
                $this->direction = 'desc';
            }
        } else {
            $this->sort = $sort;
        }
    }
    public function render()
    {
        $this->totaltipoincidencias = Tipoincidencia::all();
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
                $q->where('incidencias.estado_id', '9')
                    ->orWhere('incidencias.estado_id', '10');
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
        $clientes = DB::table('clientes')->select('clientes.nombre', 'clientes.id', 'clientes.apellido')->get();
        return view('livewire.admin.gestionar-incidencias.agenda-incidencia.show-incidencia')->with('clientes', $clientes)->with('incidencias', $incidencias);
    }
}
