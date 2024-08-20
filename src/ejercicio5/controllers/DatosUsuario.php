<?php

namespace Juanpablolausi\ProgramacionWebDinamicaTpUno\ejercicio5\controllers;

use Juanpablolausi\ProgramacionWebDinamicaTpUno\ejercicio5\models\Persona;
use Juanpablolausi\ProgramacionWebDinamicaTpUno\lib\Controller;

class DatosUsuario extends Controller{

    function __construct()
    {
        parent::__construct();
    }

    public function mostrarDatos(){
        $requestNombre = $this->get('nombre');
        $requestApellido = $this->get('apellido');
        $requestEdad = $this->get('edad');
        $requestDireccion = $this->get('direccion');
        $requestNivelEstudio = $this->get('nivelEstudio');
        $requestSexo = $this->get('sexo');

        $nombreOk = !is_null($requestNombre);
        $apellidoOk = !is_null($requestApellido);
        $edadOk = !is_null($requestEdad) && is_numeric($requestEdad);
        $direccionOk = !is_null($requestDireccion);
        $nivelEstudioOk = !is_null($requestNivelEstudio);
        $sexoOk = !is_null($requestSexo);

        if($nombreOk && $apellidoOk && $edadOk && $direccionOk && $nivelEstudioOk & $sexoOk){
            $persona = new Persona($requestNombre,$requestApellido,$requestEdad,$requestDireccion,$requestNivelEstudio,$requestSexo);
            $resp = $persona->getDatos();
            $this->render('ejercicio5','resultado',['resp'=>$resp]);
        }else{
            $this->render('ejercicio5','form');
        }
    }
}