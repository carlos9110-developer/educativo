<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeriodosGradosTable extends Migration
{
    public function up()
    {
        Schema::create('periodos_grados', function (Blueprint $table) {
            $table->increments('id');
            $table->string('periodo',10);
            $table->unsignedInteger('id_grado');// es un entero sin signo osea siempre debe ser positivo
            $table->foreign('id_grado')->references('id')->on('grados')->onDelete('restrict')->onUpdate('restrict');// es para que no puedan eliminar datos de rol que esten aca
            $table->date('fecha_inicio');
            $table->date('fecha_final');
            $table->integer('porcentaje');
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
        Schema::dropIfExists('periodos_grados');
    }
}
