<?php

namespace Juanpablolausi\ProgramacionWebDinamicaTpUno\lib;
use Juanpablolausi\ProgramacionWebDinamicaTpUno\lib\View;

class Controller{
    private View $view;

    public function __construct(){
        $this->view = new View();
    }

    public function render(string $carpeta, string $name, array $data = []){
        $this->view->render($carpeta,$name,$data); 
    }

    public function post(string $param){
        if(!isset($_POST[$param])){
          return NULL;  
        }
        return $_POST[$param];
    }

    public function get(string $param){
        if(!isset($_GET[$param])){
            return NULL;  
          }
          return $_GET[$param];
    }

    public function file(string $param){
        if(!isset($_FILES[$param])){
            return NULL;  
          }
          return $_FILES[$param];
    }
}