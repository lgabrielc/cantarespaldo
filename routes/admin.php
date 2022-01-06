<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ClienteController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\GestionarIncidenciasController;
use App\Http\Controllers\Admin\PagoController;
use App\Http\Controllers\Admin\GestionarReportesController;
use App\Http\Controllers\admin\HerramientaController;
use App\Http\Controllers\Admin\GestionarServicioController;
use App\Http\Controllers\Admin\RecursosAntenaController;
use App\Http\Controllers\Admin\RecursosFibraController;
use App\Http\Controllers\Admin\UsuarioController;

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('can:admin.dashboard')->name('admin.dashboard');
Route::get('/clientes', [ClienteController::class, 'index'])->middleware('can:admin.clientes')->name('admin.clientes');
Route::get('/pagos', [PagoController::class, 'index'])->middleware('can:admin.pagos')->name('admin.pagos');
Route::get('/usuarios', [UsuarioController::class, 'index'])->middleware('can:admin.usuarios')->name('admin.usuarios');

Route::prefix('gestionarincidencias')->group(function () {
    Route::get('/agendaincidencias', [GestionarIncidenciasController::class, 'agenda'])->middleware('can:admin.gestionarincidencias.agendaincidencias')->name('admin.gestionarincidencias.agendaincidencias');
    Route::get('/historialincidencias', [GestionarIncidenciasController::class, 'historial'])->middleware('can:admin.gestionarincidencias.historialincidencias')->name('admin.gestionarincidencias.historialincidencias');
});

Route::resource('herramientas', HerramientaController::class)->parameters(["herramienta" => "herramienta"]);

Route::prefix('recursosantena')->group(function () {
    Route::get('/servidores', [RecursosAntenaController::class, 'servidor'])->middleware('can:admin.recursosantena.servidores')->name('admin.recursosantena.servidores');
    Route::get('/torres', [RecursosAntenaController::class, 'torre'])->middleware('can:admin.recursosantena.torres')->name('admin.recursosantena.torres');
    Route::get('/antenas', [RecursosAntenaController::class, 'antena'])->middleware('can:admin.recursosantena.antenas')->name('admin.recursosantena.antenas');
});

Route::prefix('recursosfibra')->group(function () {
    Route::get('/datacenters', [RecursosFibraController::class, 'datacenter'])->middleware('can:admin.recursosfibra.datacenters')->name('admin.recursosfibra.datacenters');
    Route::get('/olts', [RecursosFibraController::class, 'olt'])->middleware('can:admin.recursosfibra.olts')->name('admin.recursosfibra.olts');
    Route::get('/tarjetas', [RecursosFibraController::class, 'tarjeta'])->middleware('can:admin.recursosfibra.tarjetas')->name('admin.recursosfibra.tarjetas');
    Route::get('/gpons', [RecursosFibraController::class, 'gpon'])->middleware('can:admin.recursosfibra.gpons')->name('admin.recursosfibra.gpons');
    Route::get('/naps', [RecursosFibraController::class, 'nap'])->middleware('can:admin.recursosfibra.naps')->name('admin.recursosfibra.naps');
});
Route::prefix('gestionreportes')->group(function () {
    Route::get('/pagoscliente', [GestionarReportesController::class, 'pagocliente'])->middleware('can:admin.gestionreportes.pagoscliente')->name('admin.gestionreportes.pagoscliente');
});

Route::prefix('gestionarservicios')->group(function () {
    Route::get('/cortarservicios', [GestionarServicioController::class, 'cortarservicio'])->middleware('can:admin.gestionarservicios.cortarservicios')->name('admin.gestionarservicios.cortarservicios');
    Route::get('/habilitarservicios', [GestionarservicioController::class, 'habilitarservicio'])->middleware('can:admin.gestionarservicios.habilitarservicios')->name('admin.gestionarservicios.habilitarservicios');
    Route::get('/congelarservicios', [GestionarservicioController::class, 'congelarservicio'])->middleware('can:admin.gestionarservicios.congelarservicios')->name('admin.gestionarservicios.congelarservicios');
    Route::get('/descongelarservicios', [GestionarservicioController::class, 'descongelarservicio'])->middleware('can:admin.gestionarservicios.descongelarservicios')->name('admin.gestionarservicios.descongelarservicios');
    Route::get('/regresarcorte', [GestionarservicioController::class, 'regresaracorte'])->middleware('can:admin.gestionarservicios.regresarcorte')->name('admin.gestionarservicios.regresarcorte');
});
