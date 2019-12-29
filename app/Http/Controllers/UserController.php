<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Helpers\JwtAuth;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
/**
  * ROl 1 = ADMINISTRATIVO
  * Rol 2 = DOCENTE
*/
class UserController extends Controller
{
    public function verificarToken(Request $request)
    {
        $response = array('success' => true);
        return new JsonResponse($response);
    }

    public function login(Request $request)
    {
        $email=$request->usuario;
        $password=$request->password;
        if(!is_null($email) && !is_null($password) )
        {
            $jwt = new JwtAuth();
            return new JsonResponse($jwt->login($email,$password));
        }
    }

}
