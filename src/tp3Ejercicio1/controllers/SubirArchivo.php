<?php

namespace Juanpablolausi\ProgramacionWebDinamicaTpUno\tp3Ejercicio1\controllers;

use Juanpablolausi\ProgramacionWebDinamicaTpUno\lib\UtilImages;
use Juanpablolausi\ProgramacionWebDinamicaTpUno\tp3Ejercicio1\models\Archivo;
use Juanpablolausi\ProgramacionWebDinamicaTpUno\lib\Controller;

class SubirArchivo extends Controller{

    function __construct()
    {
        parent::__construct();
    }

    public function store(){
        $archivo = $this->file('archivo');
        
        $url = UtilImages::storeFile($archivo);
        
        if(!is_null($url)){
            error_log($url);
            $archivo = new Archivo($url);
            $this->render('tp3Ejercicio1','form',['resp'=>$url]);
        }
           
    }
}