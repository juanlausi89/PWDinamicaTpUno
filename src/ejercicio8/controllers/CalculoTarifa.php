<?php

namespace Juanpablolausi\ProgramacionWebDinamicaTpUno\ejercicio8\controllers;

use Juanpablolausi\ProgramacionWebDinamicaTpUno\ejercicio8\models\Tarifa;
use Juanpablolausi\ProgramacionWebDinamicaTpUno\lib\Controller;

class CalculoTarifa extends Controller{

    function __construct()
    {
        parent::__construct();
    }

    public function calcular(){
        $requestEdad = $this->post('edad');
        $requestEsEstudiante = $this->post('esEstudiante');

        if(!$requestEsEstudiante){
            $requestEsEstudiante="";
        }

        $edadOk = !is_null($requestEdad) && is_numeric($requestEdad);
        
        if($edadOk){
            $operacionMatematica = new Tarifa($requestEdad,$requestEsEstudiante);
            $resp = $operacionMatematica->calcular();
            $this->render('ejercicio8','form',['resp'=>$resp]);
        }else{
            $this->render('ejercicio8','form');
        }
    }
}