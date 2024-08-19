<?php

namespace Juanpablolausi\ProgramacionWebDinamicaTpUno\ejercicio1\models;

class Numero{

    private int $numero;

    public function __construct($numero)
    {
        $this->numero = $numero;
    }

    public function calcularTipoDeNumero(){
        $resp = "";
        if($this->numero == 0){
            $resp= "El número es 0";
        }else{
            if($this->numero > 0){
                $resp = "El número es positivo";
            }else{
                $resp = "El número es negativo";
            }
        }
        return $resp;
    }

}