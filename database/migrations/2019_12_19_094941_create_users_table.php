<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('usuario',100)->unique();
            $table->string('password');
            $table->foreign('rol_id')->references('id')->on('roles')->onDelete('restrict')->onUpdate('restrict');// es para que no puedan eliminar datos de rol que esten aca
            $table->unsignedInteger('rol_id');//
            $table->char('estado','1')->default('1');
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
        Schema::dropIfExists('users');
    }
}
