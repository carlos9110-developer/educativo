<?php
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
class MateriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $materias =
        [
            '0' => array("materia"=>"Matematicas", "id_area"=>"1"),
            '1' => array("materia"=>"Biologia", "id_area"=>"2"),
            '2' => array("materia"=>"Castellano", "id_area"=>"3"),
            '3' => array("materia"=>"Ingles", "id_area"=>"4"),
            '4' => array("materia"=>"Sociales", "id_area"=>"1"),
            '5' => array("materia"=>"Artistica", "id_area"=>"2"),
            '6' => array("materia"=>"Educación Fisica", "id_area"=>"3"),
            '7' => array("materia"=>"Religión", "id_area"=>"4"),
        ];

        foreach( $materias as $key =>$value ){
            DB::table('materias')->insert([
                'materia' => $value['materia'],
                'id_area'    => $value['id_area'],
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }
    }
}
