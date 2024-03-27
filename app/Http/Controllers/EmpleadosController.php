<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Clases\cListas;
use App\Tools\cMessageTrigger;


class EmpleadosController extends Controller
{

    public function showAgregarEmpleadosForm()
    {
        $viewFront = $this->setVariablesFront();
        return view('configurar', $viewFront);
    }

    public function agregarEmpleado(Request $request)
    {
        $this->validate($request,[
            'nombre' =>'required|min:3',
            'correo' =>'required|email',
            'puesto' =>'required',
            'nacimiento' =>'required',
            'password' =>'required|min:6',
            'calle1' =>'required|min:3',
            'numero_ext' =>'required|min:1',
            'codigoPostal' =>'required|min:4',
            'municipio' =>'required|min:3',
            'estado' =>'required',
            'pais' =>'required'
        ]);

        $id_empleado = $this->insertarDatosPersonales($request->all());
        if($id_empleado === FALSE)
        {
            $mensaje = cMessageTrigger::fire("NO_INSERT_SQL");
            return view('configurar',$this->setVariablesFront(TRUE,$mensaje));
        }
        //$id_empleado = 22;
        if ($this->insertarDomicilio($request->all(), $id_empleado) === FALSE) {
            $mensaje = cMessageTrigger::strike("NO_INSERT_DIRECTION");
            return view('configurar', $this->setVariablesFront(TRUE, $mensaje));
        } else {
            $mensaje = cMessageTrigger::success("INSERT_SUCCES");
            return view('configurar', $this->setVariablesFront(TRUE, $mensaje));
        }
    }

    private function insertarDatosPersonales($datos)
    {
        try {
            DB::table('empleados')->insert([
                'nombre' => $datos['nombre'],
                'mail' => $datos['correo'],
                'password' => bcrypt($datos['password']),
                'puesto' =>  $datos['puesto'],
                'nacimiento' => $datos['nacimiento'],
            ]);
            $id_empleado = DB::getPdo()->lastInsertId();
            return $id_empleado;
        } catch (\Exception $e) {
            return FALSE;
        }
    }

    private function insertarDomicilio($datos, $id_empleado)
    {
        try {
            DB::table('domicilio_empleados')->insert([
                'id_empleado' => $id_empleado,
                'no_ext' => $datos['numero_ext'],
                'no_int' => $datos['numero_int'],
                'calle1' => $datos['calle1'],
                'calle2' => $datos['calle2'],
                'colonia' => $datos['colonia'],
                'municipio' => $datos['municipio'],
                'estado' => $datos['estado'],
                'codigo_postal' => $datos['codigoPostal'],
                'pais' => $datos['pais'],
            ]);
            return TRUE;
        } catch (\Exception $e) {
            return FALSE;
        }
    }

    private function setVariablesFront($fethc = false, $mensaje = '')
    {
        $listas = new cListas(TRUE);
        $viewFront['options'] = $listas->listaEmpleos();
        $viewFront['estados'] = $listas->listaEstados();
        $viewFront['paises'] = $listas->listaPaises();
        $viewFront['empleados'] = 0;
        $viewFront['fetch'] = $fethc;
        $viewFront['mi_mensaje'] = $mensaje;
        return $viewFront;
    }

    public function envioCsrf()
    {
        return csrf_token();
    }
}
