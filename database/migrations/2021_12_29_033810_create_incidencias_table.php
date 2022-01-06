<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncidenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incidencias', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion');
            $table->dateTime('fecha');
            $table->unsignedBigInteger('tipoincidencia_id');
            $table->unsignedBigInteger('cliente_id');
            $table->unsignedBigInteger('estado_id');
            $table->foreign('tipoincidencia_id')->references('id')->on('tipoincidencias');
            $table->foreign('cliente_id')->references('id')->on('clientes');
            $table->foreign('estado_id')->references('id')->on('estados');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('incidencias');
    }
}
