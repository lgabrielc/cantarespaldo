<?php

namespace App\Http\Livewire\Admin\Dashboard;

use App\Models\Cliente;
use App\Models\Incidencia;
use App\Models\Pago;
use App\Models\Servicio;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;

class Showdashboard extends Component
{
    use WithPagination;
    public $clientes, $clientesconservicio, $clientesparacortar, $clientescorteejecutado, $clientesretirados, $clientesretirodeequipos, $clientescongelados;
    public $totalincidencias, $incidenciasparahoyportipo,$incidenciasparahoy,$totalclientes,$totalclientesconservicio;
    public $numeropagosrealizadoshoy, $montopagosrealizadoshoy,$pagosmontodehoy,$pagoshoy;

    public function mount()
    {
        $this->incidenciasparahoy =  Incidencia::where(function ($q) {
            $q->where('estado_id', '9')
                ->orWhere('estado_id', '10');
        })
            ->whereDate('fecha', date('Y-m-d'))
            ->count();
        $this->totalclientes = Cliente::all()->count();
        $this->totalclientesconservicio = Servicio::all()->count();
        $this->pagosmontodehoy = Pago::whereDate('fecha', Carbon::today())->sum('monto');
        $this->pagoshoy = Pago::whereDate('fecha', Carbon::today())->count();
    }
    public function render()
    {

        // $incidenciasparahoyportipo
        // $numeropagosrealizadoshoy
        // $montopagosrealizadoshoy
        return view('livewire.admin.dashboard.showdashboard');
    }
}
