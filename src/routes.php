<?php

use Juanpablolausi\ProgramacionWebDinamicaTpUno\ejercicio1\controllers\VerNumero;
use Juanpablolausi\ProgramacionWebDinamicaTpUno\ejercicio2\controllers\IngresarHoras;
use Juanpablolausi\ProgramacionWebDinamicaTpUno\ejercicio3\controllers\DatosPersonales;
use Juanpablolausi\ProgramacionWebDinamicaTpUno\ejercicio4\controllers\DatosPersona;
use Juanpablolausi\ProgramacionWebDinamicaTpUno\ejercicio5\controllers\DatosUsuario;
use Juanpablolausi\ProgramacionWebDinamicaTpUno\ejercicio6\controllers\DatosAlumno;
use Juanpablolausi\ProgramacionWebDinamicaTpUno\ejercicio7\controllers\Calcular;

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
    $controller->calcular($_GET);
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

//RUTAS EJERCICIO 4

$router->get('/ejercicio4',function(){
    $controller = new DatosPersona;
    $controller->render('ejercicio4','form');
});

$router->get('/enviarDatosPersonas',function(){
    $controller = new DatosPersona;
    $controller->mostrarDatos($_GET);
});

//RUTAS EJERCICIO 5

$router->get('/ejercicio5',function(){
    $controller = new DatosUsuario;
    $controller->render('ejercicio5','form');
});

$router->get('/enviarDatosUsuario',function(){
    $controller = new DatosUsuario;
    $controller->mostrarDatos($_GET);
});

//RUTAS EJERCICIO 6

$router->get('/ejercicio6',function(){
    $controller = new DatosAlumno;
    $controller->render('ejercicio6','form');
});

$router->get('/enviarDatosAlumno',function(){
    $controller = new DatosAlumno;
    $controller->mostrarDatos($_GET);
});

//RUTAS EJERCICIO 7

$router->get('/ejercicio7',function(){
    $controller = new Calcular;
    $controller->render('ejercicio7','form');
});

$router->post('/calcularOperacionMatematica',function(){
    $controller = new Calcular;
    $controller->calcular($_POST);
});

$router->run();