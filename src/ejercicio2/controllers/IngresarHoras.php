<?php

namespace Juanpablolausi\ProgramacionWebDinamicaTpUno\ejercicio2\controllers;

use Juanpablolausi\ProgramacionWebDinamicaTpUno\ejercicio2\models\Hora;
use Juanpablolausi\ProgramacionWebDinamicaTpUno\lib\Controller;

class IngresarHoras extends Controller{

    function __construct()
    {
        parent::__construct();
    }

    public function calcular(){
        $requestHorasLunes = $this->get('horasLunes');
        $requestHorasMartes = $this->get('horasMartes');
        $requestHorasMiercoles = $this->get('horasMiercoles');
        $requestHorasJueves = $this->get('horasJueves');
        $requestHorasViernes = $this->get('horasViernes');

        $horasLunesOk = !is_null($requestHorasLunes) && is_numeric($requestHorasLunes);
        $horasMartesOk = !is_null($requestHorasMartes) && is_numeric($requestHorasMartes);
        $horasMiercolesOk = !is_null($requestHorasMiercoles) && is_numeric($requestHorasMiercoles);
        $horasJuevesOk = !is_null($requestHorasJueves) && is_numeric($requestHorasJueves);
        $horasViernesOk = !is_null($requestHorasViernes) && is_numeric($requestHorasViernes);

        if($horasLunesOk && $horasMartesOk && $horasMiercolesOk && $horasJuevesOk && $horasViernesOk){
            $hora = new Hora();
            $horasDiaSemana = $hora->getArrayHorarios(
                $requestHorasLunes,
                $requestHorasMartes,
                $requestHorasMiercoles,
                $requestHorasJueves,
                $requestHorasViernes
            );
            $resp = $hora->totalHorasSemana($horasDiaSemana);
            $this->render('ejercicio2','resultado',['resp'=>$resp]);
        }else{
            $this->render('ejercicio2','form');
        }
    }
}