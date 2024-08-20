<?php

namespace Juanpablolausi\ProgramacionWebDinamicaTpUno\ejercicio6\models;

class Alumno{

    private string $nombre;
    private string $apellido;
    private int $edad;
    private string $direccion;
    private string $nivelEstudio;
    private string $sexo;
    private array $deportes;


    public function __construct($nombre,$apellido,$edad,$direccion,$nivelEstudio,$sexo,$deportes)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = $edad;
        $this->direccion = $direccion;
        $this->nivelEstudio = $nivelEstudio;
        $this->sexo = $sexo;
        $this->deportes = $deportes;
    }

    public function getDatos(){
        return $this;
    }

    public function getNombre():string{
        return $this->nombre;
    }
    public function getApellido():string{
        return $this->apellido;
    }
    public function getEdad():int{
        return $this->edad;
    }
    public function getDireccion():string{
        return $this->direccion;
    }
    public function getNivelEstudio():string{
        return $this->nivelEstudio;
    }
    public function getSexo():string{
        return $this->sexo;
    }

    public function getDeportes():array{
        return $this->deportes;
    }

    public function textEdad($edad){
        $text ="Es menor edad";
        if($edad>=18){
            $text = "Es mayor edad";
        }
        return $text;
    }

}