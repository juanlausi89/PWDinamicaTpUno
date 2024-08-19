<?php

namespace Juanpablolausi\ProgramacionWebDinamicaTpUno\ejercicio3\controllers;

use Juanpablolausi\ProgramacionWebDinamicaTpUno\ejercicio3\models\Persona;
use Juanpablolausi\ProgramacionWebDinamicaTpUno\lib\Controller;

class DatosPersonales extends Controller{

    function __construct()
    {
        parent::__construct();
    }

    public function mostrarDatos(){
        $requestNombre = $this->post('nombre');
        $requestApellido = $this->post('apellido');
        $requestEdad = $this->post('edad');
        $requestDireccion = $this->post('direccion');

        $nombreOk = !is_null($requestNombre);
        $apellidoOk = !is_null($requestApellido);
        $edadOk = !is_null($requestEdad) && is_numeric($requestEdad);
        $direccionOk = !is_null($requestDireccion);

        if($nombreOk && $apellidoOk && $edadOk && $direccionOk){
            $persona = new Persona($requestNombre,$requestApellido,$requestEdad,$requestDireccion);
            $resp = $persona->generarTextoDatosPersonales();
            $this->render('ejercicio3','resultado',['resp'=>$resp]);
        }else{
            $this->render('ejercicio3','form');
        }
    }
}