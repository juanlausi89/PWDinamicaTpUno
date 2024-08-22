<?php

namespace Juanpablolausi\ProgramacionWebDinamicaTpUno\tp2Ejercicio4\controllers;

use Juanpablolausi\ProgramacionWebDinamicaTpUno\lib\Controller;
use Juanpablolausi\ProgramacionWebDinamicaTpUno\tp2Ejercicio4\models\Pelicula;

class CargarPeliculas extends Controller{

    function __construct()
    {
        parent::__construct();
    }

    public function save(){
        $requestTitulo = $this->post('titulo');
        $requestActores = $this->post('actores');
        $requestDirector = $this->post('director');
        $requestGuion= $this->post('guion');
        $requestProduccion = $this->post('produccion');
        $requestAnio = $this->post('anio');
        $requestNacionalidad = $this->post('nacionalidad');
        $requestGenero = $this->post('genero');
        $requestDuracion = $this->post('duracion');
        $requestRestriccionEdad = $this->post('restriccionEdad');
        $requestSinopsis = $this->post('sinopsis');

        $tituloOk = !is_null($requestTitulo);
        $actoresOk = !is_null($requestActores);
        $directorOk = !is_null($requestDirector); 
        $guionOk = !is_null($requestGuion); 
        $produccionOk = !is_null($requestProduccion); 
        $anioOk = !is_null($requestAnio) && is_numeric($requestAnio); 
        $nacionalidadOk = !is_null($requestNacionalidad); 
        $generoOk = !is_null($requestGenero); 
        $duracionOk = !is_null($requestDuracion) && is_numeric($requestDuracion);; 
        $restriccionEdadOk = !is_null($requestRestriccionEdad); 
        $sinopsisOk = !is_null($requestSinopsis);   
        
        if($tituloOk && $actoresOk && $directorOk && 
            $guionOk && $produccionOk && $anioOk && 
            $nacionalidadOk && $generoOk && $duracionOk && 
            $restriccionEdadOk && $sinopsisOk){
            
            $pelicula = new Pelicula(
                $requestTitulo,
                $requestActores,
                $requestDirector,
                $requestGuion,
                $requestProduccion,
                $requestAnio,
                $requestNacionalidad,
                $requestGenero,
                $requestDuracion,
                $requestRestriccionEdad,
                $requestSinopsis,
            );
            $resp = $pelicula->getPelicula();
            if($resp){
                $this->render('tp2Ejercicio4','form',['resp'=>$resp]);
            }
        }else{
            $this->render('tp2Ejercicio4','form');
        }
    }
}