<?php

use Juanpablolausi\ProgramacionWebDinamicaTpUno\ejercicio1\controllers\VerNumero;
use Juanpablolausi\ProgramacionWebDinamicaTpUno\ejercicio2\controllers\IngresarHoras;
use Juanpablolausi\ProgramacionWebDinamicaTpUno\ejercicio3\controllers\DatosPersonales;

$router = new \Bramus\Router\Router();
session_start();

$router->get('/',function(){
    echo "inicio";
});

//RUTAS EJERCICIO 1

$router->get('/ejercicio1',function(){
    $controller = new VerNumero;
    $controller->render('ejercicio1','form');
});

$router->post('/enviarNumero',function(){
    $controller = new VerNumero;
    $controller->calcular($_POST);
});

//RUTAS EJERCICIO 2

$router->get('/ejercicio2',function(){
    $controller = new IngresarHoras;
    $controller->render('ejercicio2','form');
});

$router->get('/enviarHoras',function(){
    $controller = new IngresarHoras;
    $controller->calcular($_POST);
});

//RUTAS EJERCICIO 3

$router->get('/ejercicio3',function(){
    $controller = new DatosPersonales;
    $controller->render('ejercicio3','form');
});

$router->post('/enviarDatosPersonales',function(){
    $controller = new DatosPersonales;
    $controller->mostrarDatos($_POST);
});

$router->run();