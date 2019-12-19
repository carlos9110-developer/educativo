<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UserSeeder extends Seeder
{
    public function run()
    {

        $users=[
            "0" => array("usuario"=>"1088008382", "password"=>hash("SHA256",'12345'), "rol_id"=>1),
            "1" => array("usuario"=>"111111",     "password"=>hash("SHA256",'12345'), "rol_id"=>2)
        ];

        foreach( $users as $key=>$value ){
            DB::table('users')->insert([
                'usuario' 	        =>	$value["usuario"],
                'password'	        =>  $value["password"],
                'rol_id'            =>  $value["rol_id"]
            ]);
        }
    }
}
