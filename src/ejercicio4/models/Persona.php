<?php

namespace Juanpablolausi\ProgramacionWebDinamicaTpUno\ejercicio4\models;

class Persona{

    private string $nombre;
    private string $apellido;
    private int $edad;
    private string $direccion;


    public function __construct($nombre,$apellido,$edad,$direccion)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = $edad;
        $this->direccion = $direccion;
    }

    public function generarTextoDatosPersonales(){
        $resp = "Hola, yo soy ".$this->nombre.", "
        .$this->apellido." tengo ".$this->edad.", vivo en ".$this->direccion." y soy "
        .$this->textEdad($this->edad)." edad";
        return $resp;
    }

    private function textEdad($edad){
        $text ="menor";
        if($edad>=18){
            $text = "mayor";
        }
        return $text;
    }

}