<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdministrativosTable extends Migration
{

    public function up()
    {
        Schema::create('administrativos', function (Blueprint $table)
        {
            $table->increments('id');
            $table->string('cedula',100)->unique();
            $table->string('nombre',100);
            $table->string('apellidos',100);
            $table->unsignedInteger('id_usuario');// es un entero sin signo osea siempre debe ser positivo
            $table->foreign('id_usuario')->references('id')->on('users');// es para que no puedan eliminar datos de rol que esten aca
            $table->charset   = 'utf8mb4';
            $table->collation = 'utf8mb4_spanish_ci';
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('administrativos');
    }
}
