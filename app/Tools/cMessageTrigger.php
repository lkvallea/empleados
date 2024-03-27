<?php
namespace App\Tools;

class cMessageTrigger{
    public static function fire($mensaje = ""){
        switch ($mensaje){
            case"NO_INSERT_SQL":
                $varFront['class'] = "text-white bg-danger";
                $varFront['mensaje'] = "NO SE GUARDARARON LOS REGISTROS VUELVALO A INTENTAR";
                return $varFront;
        }
    }

    public static function strike($mensaje = ""){
        switch ($mensaje){
            case"NO_INSERT_DIRECTION":
                $varFront['class'] = "text-dark bg-warning";
                $varFront['mensaje'] = "NO SE GUARDARARON LA DIRECCION PUEDE MODIFICARLOS EN LA VENTANA DE CONSULTAS";
                return $varFront;
        }
    }

    public static function success($mensaje = ""){
        switch ($mensaje){
            case"INSERT_SUCCES":
                $varFront['class'] = "text-white bg-success";
                $varFront['mensaje'] = "SE GUARDARARON LOS REGISTROS";
                return $varFront;
        }
    }
}
