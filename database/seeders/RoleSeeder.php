<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Administrador = Role::create(['name' => 'Administrador']);
        $Tecnico = Role::create(['name' => 'Técnico']);
        $Oficina = Role::create(['name' => 'Oficina']);
        //assignRole es para asignar a un rol
        //syncRoles es para asignar a varios roles

        //Modulo dashboards
        Permission::create(['name' => 'admin.dashboard'])->syncRoles([$Administrador, $Oficina, $Tecnico]);
        //Modulo de Usuarios
        Permission::create(['name' => 'admin.usuarios'])->assignRole($Administrador);
        Permission::create(['name' => 'admin.usuarios.crear'])->assignRole($Administrador);
        Permission::create(['name' => 'admin.usuarios.ver'])->assignRole($Administrador);
        Permission::create(['name' => 'admin.usuarios.editar'])->assignRole($Administrador);
        Permission::create(['name' => 'admin.usuarios.eliminar'])->assignRole($Administrador);
        //Modulo de Clientes
        Permission::create(['name' => 'admin.clientes'])->syncRoles([$Administrador, $Oficina, $Tecnico]);
        Permission::create(['name' => 'admin.clientes.crear.cliente'])->assignRole([$Administrador, $Oficina]);
        Permission::create(['name' => 'admin.clientes.editar.cliente'])->syncRoles([$Administrador, $Oficina]);
        Permission::create(['name' => 'admin.clientes.agregar.servicio'])->syncRoles([$Administrador, $Oficina]);
        Permission::create(['name' => 'admin.clientes.ver.servicio'])->syncRoles([$Administrador, $Oficina, $Tecnico]);
        Permission::create(['name' => 'admin.clientes.editar.servicio'])->syncRoles([$Administrador, $Oficina]);
        Permission::create(['name' => 'admin.clientes.migrar.servicio'])->syncRoles([$Administrador, $Oficina]);
        Permission::create(['name' => 'admin.clientes.agregar.plan'])->assignRole($Administrador);
        Permission::create(['name' => 'admin.clientes.eliminar.servicio'])->assignRole($Administrador);
        Permission::create(['name' => 'admin.clientes.ver.plan'])->syncRoles([$Administrador, $Oficina]);
        Permission::create(['name' => 'admin.clientes.editar.plan'])->assignRole($Administrador);
        Permission::create(['name' => 'admin.clientes.eliminar.plan'])->assignRole($Administrador);
        // //Modulo de Pago de Servicio
        Permission::create(['name' => 'admin.pagos'])->syncRoles([$Administrador, $Oficina]);
        // //Modulo de Gestionar Incidencias
        Permission::create(['name' => 'admin.gestionarincidencias'])->syncRoles([$Administrador, $Oficina, $Tecnico]);
        Permission::create(['name' => 'admin.gestionarincidencias.agendaincidencias'])->syncRoles([$Administrador, $Oficina, $Tecnico]);
        Permission::create(['name' => 'admin.gestionarincidencias.agendaincidencias.agregar.incidencia'])->syncRoles([$Administrador, $Oficina]);
        Permission::create(['name' => 'admin.gestionarincidencias.agendaincidencias.terminar.incidencia'])->syncRoles([$Administrador, $Oficina, $Tecnico]);
        Permission::create(['name' => 'admin.gestionarincidencias.agendaincidencias.reprogramar.incidencia'])->syncRoles([$Administrador, $Oficina]);
        Permission::create(['name' => 'admin.gestionarincidencias.agendaincidencias.eliminar.incidencia'])->syncRoles([$Administrador, $Oficina]);
        Permission::create(['name' => 'admin.gestionarincidencias.agendaincidencias.ver.tipoincidencia'])->syncRoles([$Administrador, $Oficina]);
        Permission::create(['name' => 'admin.gestionarincidencias.agendaincidencias.agregar.tipoincidencia'])->syncRoles([$Administrador, $Oficina]);
        Permission::create(['name' => 'admin.gestionarincidencias.agendaincidencias.editar.tipoincidencia'])->syncRoles([$Administrador, $Oficina]);
        Permission::create(['name' => 'admin.gestionarincidencias.agendaincidencias.eliminar.tipoincidencia'])->syncRoles([$Administrador, $Oficina]);
        Permission::create(['name' => 'admin.gestionarincidencias.historialincidencias'])->syncRoles([$Administrador, $Oficina, $Tecnico]);
        // //Modulo de Recursos Antena
        Permission::create(['name' => 'admin.recursosantena'])->assignRole($Administrador);
        Permission::create(['name' => 'admin.recursosantena.servidores'])->assignRole($Administrador);
        Permission::create(['name' => 'admin.recursosantena.servidores.agregar'])->assignRole($Administrador);
        Permission::create(['name' => 'admin.recursosantena.servidores.editar'])->assignRole($Administrador);
        Permission::create(['name' => 'admin.recursosantena.servidores.cambiarestado'])->assignRole($Administrador);
        Permission::create(['name' => 'admin.recursosantena.torres'])->assignRole($Administrador);
        Permission::create(['name' => 'admin.recursosantena.torres.agregar'])->assignRole($Administrador);
        Permission::create(['name' => 'admin.recursosantena.torres.editar'])->assignRole($Administrador);
        Permission::create(['name' => 'admin.recursosantena.torres.cambiarestado'])->assignRole($Administrador);
        Permission::create(['name' => 'admin.recursosantena.antenas'])->assignRole($Administrador);
        Permission::create(['name' => 'admin.recursosantena.antenas.agregar'])->assignRole($Administrador);
        Permission::create(['name' => 'admin.recursosantena.antenas.editar'])->assignRole($Administrador);
        Permission::create(['name' => 'admin.recursosantena.antenas.cambiarestado'])->assignRole($Administrador);
        // //Modulo de Recursos Fibra
        Permission::create(['name' => 'admin.recursosfibra'])->assignRole($Administrador);
        Permission::create(['name' => 'admin.recursosfibra.datacenters'])->assignRole($Administrador);
        Permission::create(['name' => 'admin.recursosfibra.datacenters.agregar'])->assignRole($Administrador);
        Permission::create(['name' => 'admin.recursosfibra.datacenters.editar'])->assignRole($Administrador);
        Permission::create(['name' => 'admin.recursosfibra.datacenters.cambiarestado'])->assignRole($Administrador);
        Permission::create(['name' => 'admin.recursosfibra.olts'])->assignRole($Administrador);
        Permission::create(['name' => 'admin.recursosfibra.olts.agregar'])->assignRole($Administrador);
        Permission::create(['name' => 'admin.recursosfibra.olts.editar'])->assignRole($Administrador);
        Permission::create(['name' => 'admin.recursosfibra.olts.cambiarestado'])->assignRole($Administrador);
        Permission::create(['name' => 'admin.recursosfibra.tarjetas'])->assignRole($Administrador);
        Permission::create(['name' => 'admin.recursosfibra.tarjetas.agregar'])->assignRole($Administrador);
        Permission::create(['name' => 'admin.recursosfibra.tarjetas.editar'])->assignRole($Administrador);
        Permission::create(['name' => 'admin.recursosfibra.tarjetas.cambiarestado'])->assignRole($Administrador);
        Permission::create(['name' => 'admin.recursosfibra.gpons'])->assignRole($Administrador);
        Permission::create(['name' => 'admin.recursosfibra.gpons.agregar'])->assignRole($Administrador);
        Permission::create(['name' => 'admin.recursosfibra.gpons.editar'])->assignRole($Administrador);
        Permission::create(['name' => 'admin.recursosfibra.gpons.cambiarestado'])->assignRole($Administrador);
        Permission::create(['name' => 'admin.recursosfibra.naps'])->assignRole($Administrador);
        Permission::create(['name' => 'admin.recursosfibra.naps.agregar'])->assignRole($Administrador);
        Permission::create(['name' => 'admin.recursosfibra.naps.editar'])->assignRole($Administrador);
        Permission::create(['name' => 'admin.recursosfibra.naps.cambiarestado'])->assignRole($Administrador);
        // //Modulo de Reportes
        Permission::create(['name' => 'admin.gestionreportes'])->syncRoles([$Administrador, $Oficina]);
        Permission::create(['name' => 'admin.gestionreportes.pagoscliente'])->syncRoles([$Administrador, $Oficina]);
        // //Modulo de Gestionar Servicios
        Permission::create(['name' => 'admin.gestionarservicios'])->syncRoles([$Administrador, $Oficina]);
        Permission::create(['name' => 'admin.gestionarservicios.cortarservicios'])->syncRoles([$Administrador, $Oficina]);
        Permission::create(['name' => 'admin.gestionarservicios.cortarservicios.cortarservicio'])->syncRoles([$Administrador, $Oficina]);
        Permission::create(['name' => 'admin.gestionarservicios.habilitarservicios'])->syncRoles([$Administrador, $Oficina]);
        Permission::create(['name' => 'admin.gestionarservicios.habilitarservicios.habilitarservicio'])->syncRoles([$Administrador, $Oficina]);
        Permission::create(['name' => 'admin.gestionarservicios.habilitarservicios.deshabilitarservicio'])->syncRoles([$Administrador, $Oficina]);
        Permission::create(['name' => 'admin.gestionarservicios.congelarservicios'])->syncRoles([$Administrador, $Oficina]);
        Permission::create(['name' => 'admin.gestionarservicios.congelarservicios.congelarservicio'])->syncRoles([$Administrador, $Oficina]);
        Permission::create(['name' => 'admin.gestionarservicios.descongelarservicios'])->syncRoles([$Administrador, $Oficina]);
        Permission::create(['name' => 'admin.gestionarservicios.descongelarservicios.descongelarservicio'])->syncRoles([$Administrador, $Oficina]);
        Permission::create(['name' => 'admin.gestionarservicios.regresarcorte'])->syncRoles([$Administrador, $Oficina]);
        Permission::create(['name' => 'admin.gestionarservicios.regresarcorte.regresarcorte'])->syncRoles([$Administrador, $Oficina]);
    }
}
