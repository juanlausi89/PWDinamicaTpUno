<?php

namespace Juanpablolausi\ProgramacionWebDinamicaTpUno\ejercicio1\controllers;

use Juanpablolausi\ProgramacionWebDinamicaTpUno\ejercicio1\models\Numero;
use Juanpablolausi\ProgramacionWebDinamicaTpUno\lib\Controller;

class VerNumero extends Controller{

    function __construct()
    {
        parent::__construct();
    }

    public function calcular(){
        $requestNumero = $this->post('numero');

        if(!is_null($requestNumero) && is_numeric($requestNumero)){
            $numero = new Numero($requestNumero);
            $resp = $numero->calcularTipoDeNumero();
            $this->render('ejercicio1','resultado',['resp'=>$resp]);
        }else{
            $this->render('ejercicio1','form');
        }
    }
}