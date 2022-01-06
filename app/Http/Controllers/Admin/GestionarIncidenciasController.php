<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GestionarIncidenciasController extends Controller
{
    public function agenda()
    {
        return view('livewire.admin.gestionar-incidencias.agenda-incidencia.index');
    }
    public function historial()
    {
        return view('livewire.admin.gestionar-incidencias.historial-incidencia.index');
    }
}
