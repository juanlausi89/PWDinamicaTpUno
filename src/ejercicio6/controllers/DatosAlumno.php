<?php

namespace Juanpablolausi\ProgramacionWebDinamicaTpUno\ejercicio6\controllers;

use Juanpablolausi\ProgramacionWebDinamicaTpUno\ejercicio6\models\Alumno;
use Juanpablolausi\ProgramacionWebDinamicaTpUno\lib\Controller;

class DatosAlumno extends Controller{

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
        $requestDeportes = $this->get('deportes');


        $nombreOk = !is_null($requestNombre);
        $apellidoOk = !is_null($requestApellido);
        $edadOk = !is_null($requestEdad) && is_numeric($requestEdad);
        $direccionOk = !is_null($requestDireccion);
        $nivelEstudioOk = !is_null($requestNivelEstudio);
        $sexoOk = !is_null($requestSexo);

        if($nombreOk && $apellidoOk && $edadOk && $direccionOk && $nivelEstudioOk & $sexoOk){
            $persona = new Alumno($requestNombre,$requestApellido,$requestEdad,$requestDireccion,$requestNivelEstudio,$requestSexo,$requestDeportes);
            $resp = $persona->getDatos();
            $this->render('ejercicio6','resultado',['resp'=>$resp]);
        }else{
            $this->render('ejercicio6','form');
        }
    }
}