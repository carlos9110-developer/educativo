<?php
namespace App\Http\Controllers;
use App\Models\Areas;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AreasController extends Controller
{
    public function traerAreas(Request $request)
    {
        $areas = Areas::orderBy('id')->get()->toArray();
        return new JsonResponse($areas);
    }
}
