<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class RolesSeeder extends Seeder
{
    public function run()
    {
        $roles =
        [
            '0' => array("rol"=>"Administrativo"),
            '1' => array("rol"=>"Docente")
        ];

        foreach( $roles as $key =>$value ){
            DB::table('roles')->insert([
                'rol' => $value['rol'],
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }


    }
}
