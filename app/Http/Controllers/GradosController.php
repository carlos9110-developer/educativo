<?php
namespace App\Http\Controllers;
use App\Models\Grados;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class GradosController extends Controller
{
    public function traerGrados(Request $request)
    {
        $grados = Grados::orderBy('id')->get()->toArray();
        return new JsonResponse($grados);
    }
}
