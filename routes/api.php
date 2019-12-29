<?php
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('login','UserController@login');
/* con esto se protejen todas las rutas de nuestra aplicación */
Route::group(['middleware' => 'verificacionToken'], function()
{
    /** CONTROLADOR USERS */
    Route::get('VerificarToken','UserController@verificarToken');

    /** CONTROLADOR GRADOS */
    Route::get('traer-grados','GradosController@traerGrados');

    /** CONTROLADOR MATERIAS */
    Route::get('traer-materias','MateriasController@traerMaterias');
    Route::get('traer-info-materia','MateriasController@traerInfoMateria');
    Route::post('registrar-editar-materia','MateriasController@registrarEditarMaterias');

     /** CONTROLADOR AREAS */
     Route::get('traer-areas','AreasController@traerAreas');
});
 // ruta para registrar las tarjetas


