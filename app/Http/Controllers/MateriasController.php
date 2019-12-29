<?php
namespace App\Http\Controllers;
use App\Models\Materias;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MateriasController extends Controller
{
    // función donde se retornan las materias
    public function traerMaterias(Request $request)
    {
        $materias = Materias::orderBy('id')->get()->toArray();
        return new JsonResponse($materias);
    }

    // función donde se trae la información de una determinada materia
    public function traerInfoMateria(Request $request){
        $materia = Materias::where('id',$request->id)->first();
        return new JsonResponse($materia);
    }

    // función donde se registra o edita una determinada materia
    public function registrarEditarMaterias(Request $request)
    {
        if($request->accion==0){
            return $this->registrarMateria($request);
        } else {
            return $this->editarMateria($request);
        }
    }

    // función donde se realiza el registro de una determinada materia
    private function registrarMateria($request)
    {
        $result = Materias::where('materia',$request->materia)->first();
        if(is_object($result)){
            return new JsonResponse(array("success"=>false,"msg"=>"Error, se encontró una materia con el mismo nombre"));
        } else {
            DB::beginTransaction();
            try {
                $materias = new Materias();
                $materias->materia = $request->materia;
                $materias->id_area = $request->area;
                $materias->save();
                DB::commit();
                return new JsonResponse(array("success"=>true,"msg"=>"Materia registrada correctamente"));
            } catch (\Exception $e) {
                DB::rollback();
                return new JsonResponse(array("success"=>false,"msg"=>"Error, problemas en el servidor al realizar la acción, por favor intentelo de nuevo"));
            }
        }
    }

    // función donde se edita la información de una determinada materia
    private function editarMateria($request)
    {
        $result = Materias::where('materia',$request->materia)->first();
        if(is_object($result)){
            return new JsonResponse(array("success"=>false,"msg"=>"Error, se encontró una materia con el mismo nombre"));
        } else {
            DB::beginTransaction();
            try {
                $materias = new Materias();
                $materias->materia = $request->materia;
                $materias->id_area = $request->area;
                $materias->save();
                DB::commit();
                return new JsonResponse(array("success"=>true,"msg"=>"Materia registrada correctamente"));
            } catch (\Exception $e) {
                DB::rollback();
                return new JsonResponse(array("success"=>false,"msg"=>"Error, problemas en el servidor al realizar la acción, por favor intentelo de nuevo"));
            }
        }
    }
}
