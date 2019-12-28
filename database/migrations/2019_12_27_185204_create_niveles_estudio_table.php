<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNivelesEstudioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('niveles_estudio', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nivel_estudio','70');
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
        Schema::dropIfExists('niveles_estudio');
    }
}
