<?php

namespace Juanpablolausi\ProgramacionWebDinamicaTpUno\tp2Ejercicio3\controllers;

use Juanpablolausi\ProgramacionWebDinamicaTpUno\tp2Ejercicio3\models\Usuario;
use Juanpablolausi\ProgramacionWebDinamicaTpUno\lib\Controller;

class VerificarPass extends Controller{

    function __construct()
    {
        parent::__construct();
    }

    public function login(){
        $requestUserName = $this->post('username');
        $requestPassword = $this->post('password');

        $userNameOk = !is_null($requestUserName);
        $passwordOk = !is_null($requestPassword); 
        
        if($userNameOk && $passwordOk){
            $usuario = new Usuario($requestUserName,$requestPassword);
            $resp = $usuario->login();
            if($resp){
                $this->render('tp2Ejercicio3','resultado',['resp'=>$resp]);
            }else{
                $this->render('tp2Ejercicio3','form',['resp'=>"Los datos no son validos"]);
            }
        }else{
            $this->render('tp2Ejercicio3','form');
        }
    }
}