<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class DatabaseSeeder extends Seeder
{

    public function run()
    {
        Model::unguard();
        $tablas =[
            'roles',
            'users',
            'docentes',
            'administrativos',
            'areas',
            'materias',
            'niveles_estudio',
            'grados',
            'grados_clei'
        ];
        $this->truncateTablas($tablas);
        $this->call(RolesSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(AdministrativosSeeder::class);
        $this->call(DocentesSeeder::class);
        $this->call(AreasSeeder::class);
        $this->call(MateriasSeeder::class);
        $this->call(NivelesEstudioSeeder::class);
        $this->call(GradosSeeder::class);
        $this->call(GradosCleiSeeder::class);
        Model::reguard();
    }

    // aca verificamos que los roles no existan
    protected function truncateTablas(array $tablas){
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        // truncate elimina todos los datos de la base de datos
        foreach ($tablas as $tabla) {
            DB::table($tabla)->truncate();
        }
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
    }
}
