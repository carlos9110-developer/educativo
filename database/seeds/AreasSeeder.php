<?php
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
class AreasSeeder extends Seeder
{
    public function run()
    {
        $areas =
        [
            '0' => array("area"=>"Area 1"),
            '1' => array("area"=>"Area 2"),
            '2' => array("area"=>"Area 3"),
            '3' => array("area"=>"Area 4")
        ];

        foreach( $areas as $key =>$value ){
            DB::table('areas')->insert([
                'area' => $value['area'],
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }
    }
}
