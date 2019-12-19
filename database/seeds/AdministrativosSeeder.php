<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class AdministrativosSeeder extends Seeder
{
    public function run()
    {
        DB::table('administrativos')->insert([
            'cedula'    => '1088008382',
            'nombre'    =>  'Carlos Eduardo',
            'apellidos' =>  'Hincapie Hidalgo',
            'id_usuario'=>  1
        ]);
    }
}
