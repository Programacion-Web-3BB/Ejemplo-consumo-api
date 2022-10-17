<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;



class DatosController extends Controller
{
    public function Listar(Request $request){
        $usuarioLoggeado = "";
        if($request->session()->get('autenticado') == true)
            $usuarioLoggeado = $request->session()->get('nombreUsuario');

        
        $response = Http::get('http://localhost:8000/api/datos');
        $datos = json_decode($response,true);

        return view("listar",[ 'datos' => $datos, 'usuarioLoggeado' => $usuarioLoggeado ]);
    }

    public function Login(Request $request){
        
        $response = Http::post('http://localhost:8000/api/login',[
            'usuario' => $request -> post('usuario'),
            'password' => $request -> post('password')
        ]);

        $autenticacion = json_decode($response,true);

        if($autenticacion['resultado'] == "OK"){
            $request->session()->put('autenticado', true);
            $request->session()->put('nombreUsuario', $autenticacion['usuario']);
            return redirect("/datos");
        }

        return view("login",[ 'error' => true, 'mensajeError' => $autenticacion['mensaje'] ]);
    }

    public function Logout(Request $request){
        $request->session()->invalidate();
        return redirect("/datos");

    }

}
