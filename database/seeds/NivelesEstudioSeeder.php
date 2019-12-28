<?php
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
class NivelesEstudioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nivelesEstudio =
        [
            '0' => array("nivel"=>"Preescolar"),
            '1' => array("nivel"=>"Básica Primaria"),
            '2' => array("nivel"=>"Básica Secundaria"),
            '3' => array("nivel"=>"Media Técnica")
        ];

        foreach( $nivelesEstudio as $key =>$value ){
            DB::table('niveles_estudio')->insert([
                'nivel_estudio' => $value['nivel'],
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }
    }
}
