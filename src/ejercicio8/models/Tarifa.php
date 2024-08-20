<?php

namespace Juanpablolausi\ProgramacionWebDinamicaTpUno\ejercicio8\models;

class Tarifa{

    private int $edad;
    private string $esEstudiante;


    public function __construct($edad,$esEstudiante)
    {
        $this->edad = $edad;
        $this->esEstudiante = $esEstudiante;
    }
    

    public function calcular(){
        
        $total = 300;
        
        if($this->edad < 12){
            $total = 160;
        }

        if($this->esEstudiante=="si"){
            if($this->edad < 12){
                $total = 160;
            }else{
                $total = 180; 
            }
        }

        return $total;
    }

}