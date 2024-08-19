<?php

namespace Juanpablolausi\ProgramacionWebDinamicaTpUno\ejercicio4\controllers;

use Juanpablolausi\ProgramacionWebDinamicaTpUno\ejercicio4\models\Persona;
use Juanpablolausi\ProgramacionWebDinamicaTpUno\lib\Controller;

class DatosPersona extends Controller{

    function __construct()
    {
        parent::__construct();
    }

    public function mostrarDatos(){
        $requestNombre = $this->get('nombre');
        $requestApellido = $this->get('apellido');
        $requestEdad = $this->get('edad');
        $requestDireccion = $this->get('direccion');

        $nombreOk = !is_null($requestNombre);
        $apellidoOk = !is_null($requestApellido);
        $edadOk = !is_null($requestEdad) && is_numeric($requestEdad);
        $direccionOk = !is_null($requestDireccion);

        if($nombreOk && $apellidoOk && $edadOk && $direccionOk){
            $persona = new Persona($requestNombre,$requestApellido,$requestEdad,$requestDireccion);
            $resp = $persona->generarTextoDatosPersonales();
            $this->render('ejercicio4','resultado',['resp'=>$resp]);
        }else{
            $this->render('ejercicio4','form');
        }
    }
}