<?php
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
class GradosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $grados =
        [
            '0'  => array("id_nivel_estudio"=>"1", "grado"=>"0°", "es_clei"=>"0"),
            '1'  => array("id_nivel_estudio"=>"2", "grado"=>"1°", "es_clei"=>"0"),
            '2'  => array("id_nivel_estudio"=>"2", "grado"=>"2°", "es_clei"=>"0"),
            '3'  => array("id_nivel_estudio"=>"2", "grado"=>"3°", "es_clei"=>"0"),
            '4'  => array("id_nivel_estudio"=>"2", "grado"=>"4°", "es_clei"=>"0"),
            '5'  => array("id_nivel_estudio"=>"2", "grado"=>"5°", "es_clei"=>"0"),
            '6'  => array("id_nivel_estudio"=>"3", "grado"=>"6°", "es_clei"=>"0"),
            '7'  => array("id_nivel_estudio"=>"3", "grado"=>"7°", "es_clei"=>"0"),
            '8'  => array("id_nivel_estudio"=>"3", "grado"=>"8°", "es_clei"=>"0"),
            '9'  => array("id_nivel_estudio"=>"3", "grado"=>"9°", "es_clei"=>"0"),
            '10' => array("id_nivel_estudio"=>"4", "grado"=>"10°", "es_clei"=>"0"),
            '11' => array("id_nivel_estudio"=>"4", "grado"=>"11°", "es_clei"=>"0"),
            '12' => array("id_nivel_estudio"=>"2", "grado"=>"CLEI 1", "es_clei"=>"1"),
            '13' => array("id_nivel_estudio"=>"2", "grado"=>"CLEI 2", "es_clei"=>"1"),
            '14' => array("id_nivel_estudio"=>"3", "grado"=>"CLEI 3", "es_clei"=>"1"),
            '15' => array("id_nivel_estudio"=>"3", "grado"=>"CLEI 4", "es_clei"=>"1"),
            '16' => array("id_nivel_estudio"=>"4", "grado"=>"CLEI 5", "es_clei"=>"1"),
            '17' => array("id_nivel_estudio"=>"4", "grado"=>"CLEI 6", "es_clei"=>"1")
        ];

        foreach( $grados as $key =>$value ){
            DB::table('grados')->insert([
                'id_nivel_estudio' => $value['id_nivel_estudio'],
                'grado'            => $value['grado'],
                'es_clei'          => $value['es_clei'],
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }
    }
}
