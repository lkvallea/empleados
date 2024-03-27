<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Clases\cListas;
use App\Tools\cMessageTrigger;


class ConsultarEmpleosController extends Controller
{



    public function showConsultarEmpleadosForm(){

        return view('consultar');
    }

    private function consultarEmpleados(){
        $mysql = "SELECT DISTINCT ";
        $resultado = DB::select('select * from users where active = ?', [1]);
        return $resultado;
    }

   
}
