<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMateriasGrados extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materias_grados', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('materia_id');// es un entero sin signo osea siempre debe ser positivo
            $table->foreign('materia_id')->references('id')->on('materias');// es para que no puedan eliminar datos de rol que esten aca
            $table->unsignedInteger('grados_id');// es un entero sin signo osea siempre debe ser positivo
            $table->foreign('grados_id')->references('id')->on('grados');// es para que no puedan eliminar datos de rol que esten aca
            $table->charset   = 'utf8mb4';
            $table->collation = 'utf8mb4_spanish_ci';
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
        Schema::dropIfExists('materias_grados');
    }
}
