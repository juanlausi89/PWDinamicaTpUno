<?php

namespace Juanpablolausi\ProgramacionWebDinamicaTpUno\tp2Ejercicio3\models;

class Usuario{

    private string $username;
    private string $password;
    private array $usuarios = [
        [
            "username" => "juan",
            "password" => "12345abc"
        ],
        [
            "username" => "maria",
            "password" => "password123"
        ],
        [
            "username" => "pedro",
            "password" => "abcde1234"
        ],
        [
            "username" => "lucia",
            "password" => "qwerty567"
        ]
    ];


    public function __construct($username,$password)
    {
        $this->username = $username;
        $this->password = $password;
    }

    function login(){
        $resp = null;
        $usuario = $this->encontrarUsuarioPorNombre($this->username);
        if($usuario){
            $passwordCorrecta = $usuario['password']==$this->password;
            if ($passwordCorrecta) {
                $resp = $usuario['username'];     
            }
        }
        
        return $resp;
    }

    function encontrarUsuarioPorNombre(string $nombre) {
        foreach ($this->usuarios as $usuario) {
            if ($usuario['username'] === $nombre) {
                return $usuario;
            }
        }
        return null;
    }

}