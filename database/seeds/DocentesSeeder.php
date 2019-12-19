<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DocentesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('docentes')->insert([
            'cedula'    => '111111',
            'nombre'    =>  'Sin',
            'apellidos' =>  'Asignar',
            'telefono'  =>  '3383179',
            'celular'   =>  '3115455293',
            'correo'    =>  'sinasignar@hotmail.com',
            'profesion' =>  'Biologo',
            'id_usuario'=>  2
        ]);
    }
}
