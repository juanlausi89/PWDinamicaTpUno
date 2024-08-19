<?php

use Juanpablolausi\ProgramacionWebDinamicaTpUno\ejercicio1\controllers\VerNumero;

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

$router->run();