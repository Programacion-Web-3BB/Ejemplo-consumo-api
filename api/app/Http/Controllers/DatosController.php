<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DatosController extends Controller
{
    public function Listar(Request $request){
        return [
            [
                'id' => '1',
                'nombre' => 'Jose',
                'apellido' => 'Perez'
            ],
            [
                'id' => '2',
                'nombre' => 'Jacinto',
                'apellido' => 'El Cinto'
            ]
        ];
    }

    public function Login(Request $request){
        if($request -> usuario !== "jose" || $request -> password !== "1234")
            return [
                "resultado" => "Error",
                "mensaje" => "Credenciales invalidas"
            ];

        return [
            "resultado" => "OK",
            "mensaje" => "Sesion iniciada correctamente",
            "usuario" => $request -> usuario
        ];
    }

}
