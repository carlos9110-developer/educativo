<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGradosClei extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grados_clei', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('grado_id');// es un entero sin signo osea siempre debe ser positivo
            $table->foreign('grado_id')->references('id')->on('grados');// es para que no puedan eliminar datos de rol que esten aca
            $table->unsignedInteger('clei_id');// es un entero sin signo osea siempre debe ser positivo
            $table->foreign('clei_id')->references('id')->on('grados');// es para que no puedan eliminar datos de rol que esten aca
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
        Schema::dropIfExists('grados_clei');
    }
}
