<?php

namespace Juanpablolausi\ProgramacionWebDinamicaTpUno\ejercicio7\models;

class OperacionMatematica{

    private int $primerNumero;
    private int $segundoNumero;
    private string $operacion;


    public function __construct($primerNumero,$segundoNumero,$operacion)
    {
        $this->primerNumero = $primerNumero;
        $this->segundoNumero = $segundoNumero;
        $this->operacion = $operacion;
    }

    public function calcular(){
        
        if($this->operacion=="MULTIPLICACION"){
            $resultado =  $this->primerNumero * $this->segundoNumero;
            $operacion = "*";
        }
        
        if($this->operacion=="SUMA"){ 
            $resultado =  $this->primerNumero + $this->segundoNumero;
            $operacion = "+";
        }

        if($this->operacion=="RESTA"){ 
            $resultado =  $this->primerNumero - $this->segundoNumero;
            $operacion = "-";
        }

        return $this->primerNumero." ".$operacion." ".$this->segundoNumero." = ".$resultado;
    }

}