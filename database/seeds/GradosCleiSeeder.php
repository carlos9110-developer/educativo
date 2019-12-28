<?php
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
class GradosCleiSeeder extends Seeder
{
    public function run()
    {
        $grados_clei =
        [
            '0'  => array("grado_id"=>"2", "clei_id"=>"13" ),
            '1'  => array("grado_id"=>"3", "clei_id"=>"13" ),
            '2'  => array("grado_id"=>"4", "clei_id"=>"13" ),
            '3'  => array("grado_id"=>"5", "clei_id"=>"14" ),
            '4'  => array("grado_id"=>"6", "clei_id"=>"14" ),
            '5'  => array("grado_id"=>"7", "clei_id"=>"15" ),
            '6'  => array("grado_id"=>"8", "clei_id"=>"15" ),
            '7'  => array("grado_id"=>"9", "clei_id"=>"16" ),
            '8'  => array("grado_id"=>"10", "clei_id"=>"16" ),
            '9'  => array("grado_id"=>"11", "clei_id"=>"17" ),
            '10' => array("grado_id"=>"12", "clei_id"=>"18" ),
        ];

        foreach( $grados_clei as $key =>$value ){
            DB::table('grados_clei')->insert([
                'grado_id' => $value['grado_id'],
                'clei_id'  => $value['clei_id'],
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }
    }
}
