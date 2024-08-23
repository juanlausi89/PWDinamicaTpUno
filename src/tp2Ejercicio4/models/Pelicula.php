<?php

namespace Juanpablolausi\ProgramacionWebDinamicaTpUno\tp2Ejercicio4\models;

class Pelicula{

    private string $titulo;
    private string $actores;
    private string $director;
    private string $guion;
    private string $produccion;
    private int $anio;
    private string $nacionalidad;
    private string $genero;
    private int $duracion;
    private string $restriccionEdad;
    private string $sinopsis;
    private string $url;


    public function __construct(
        $titulo,
        $actores,
        $director,
        $guion,
        $produccion, 
        $anio,
        $nacionalidad,
        $genero,
        $duracion,
        $restriccionEdad,
        $sinopsis,
        $url
        )
    {
        $this->titulo = $titulo;
        $this->actores = $actores;
        $this->director = $director;
        $this->guion = $guion;
        $this->produccion = $produccion; 
        $this->anio = $anio;
        $this->nacionalidad = $nacionalidad;
        $this->genero = $genero;
        $this->duracion = $duracion;
        $this->restriccionEdad = $restriccionEdad;
        $this->sinopsis= $sinopsis;
        $this->url= $url;
    }
    

    public function getPelicula(){
        $peliculaArray = [
            "titulo" => $this->titulo, 
            "actores" => $this->actores,
            "director" => $this->director,
            "guion" => $this->guion,
            "produccion" => $this->produccion,
            "anio" => $this->anio,
            "nacionalidad" => $this->nacionalidad,
            "genero" => $this->genero,
            "duracion" => $this->duracion,
            "restriccionEdad" => $this->restriccionEdad,
            "sinopsis" => $this->sinopsis,
            "url" => $this->url
          ];
        return $peliculaArray;
    }

}