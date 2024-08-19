<?php

namespace Juanpablolausi\ProgramacionWebDinamicaTpUno\ejercicio3\models;

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
        $resp = "Hola, yo soy ".$this->nombre.", ".$this->apellido." tengo ".$this->edad." y vivo en ".$this->direccion;
        return $resp;
    }

}