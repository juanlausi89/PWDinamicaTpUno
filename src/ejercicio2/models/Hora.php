<?php

namespace Juanpablolausi\ProgramacionWebDinamicaTpUno\ejercicio2\models;

class Hora{

    public function __construct()
    {
        
    }

    public function getArrayHorarios($horasLunes,$horasMartes,$horasMiercoles,$horasJueves,$horasViernes){
        $horasDiaSemana = array(
            "lunes" => $horasLunes, 
            "martes" => $horasMartes,
            "miercoles" => $horasMiercoles,
            "jueves" => $horasJueves,
            "viernes" => $horasViernes,
          );
          return $horasDiaSemana;
    }

    public function totalHorasSemana($horasDiaSemana){
        $total = 0;
        foreach ($horasDiaSemana as $val) {
            $total = $total+$val;
        }
        return $total;
    }

}