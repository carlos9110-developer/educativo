<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGradosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grados', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_nivel_estudio');// es un entero sin signo osea siempre debe ser positivo
            $table->foreign('id_nivel_estudio')->references('id')->on('niveles_estudio');// es para que no puedan eliminar datos de rol que esten aca
            $table->string('grado',90)->unique()->index();
            $table->char('es_clei')->default('0');
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
        Schema::dropIfExists('grados');
    }
}
