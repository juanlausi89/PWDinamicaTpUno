<?php

namespace Juanpablolausi\ProgramacionWebDinamicaTpUno\lib;

class View{
    

    function __construct(){
        
    }

    function render(string $carpeta, string $name, array $data = []){
        $this->d = $data;
        require 'src/' .$carpeta. '/views/' . $name . '.php';
    }
}