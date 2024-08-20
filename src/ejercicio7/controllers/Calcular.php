<?php

namespace Juanpablolausi\ProgramacionWebDinamicaTpUno\ejercicio7\controllers;

use Juanpablolausi\ProgramacionWebDinamicaTpUno\ejercicio7\models\OperacionMatematica;
use Juanpablolausi\ProgramacionWebDinamicaTpUno\lib\Controller;

class Calcular extends Controller{

    function __construct()
    {
        parent::__construct();
    }

    public function calcular(){
        $requestPrimerNumero = $this->post('primerNumero');
        $requestSegundoNumero = $this->post('segundoNumero');
        $requestOperacion = $this->post('operacion');

        $primerNumeroOk = !is_null($requestPrimerNumero) && is_numeric($requestPrimerNumero);;
        $segundoNumeroOk = !is_null($requestSegundoNumero) && is_numeric($requestSegundoNumero);;
        $operacionOk = !is_null($requestOperacion);
        
        if($primerNumeroOk && $segundoNumeroOk && $operacionOk){
            $operacionMatematica = new OperacionMatematica($requestPrimerNumero,$requestSegundoNumero,$requestOperacion);
            $resp = $operacionMatematica->calcular();
            $this->render('ejercicio7','resultado',['resp'=>$resp]);
        }else{
            $this->render('ejercicio7','form');
        }
    }
}