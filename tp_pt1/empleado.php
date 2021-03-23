<?php

require_once "persona.php";

class Empleado extends Persona 
{

    protected $_legajo;
    protected $_sueldo;
    protected $_turno;

    public function __construct($nombre,$apellido,$dni,$sexo,$legajo,$sueldo,$turno)
    {
        parent::__construct($nombre,$apellido,$dni,$sexo);

        $this->_legajo = $legajo;
        $this->_sueldo = $sueldo;
        $this->_turno = $turno;      
    }
   
    public function GetLegajo()
    {
        return $this->_legajo;
    }

    public function GetSueldo()
    {
        return $this->_sueldo;
    }

    public function GetTurno()
    {
        return $this->_turno;
    }

    public function Hablar($idioma = ["Español","Inglés","Francés"])
    {
        return "El empleado habla " . $idioma[0] . $idioma[1] . $idioma[2];
    }

    public function ToString()
    {
        return parent::ToString(). " - " . " LEGAJO: " . $this->GetLegajo() ." - " . "SUELDO: " . $this->GetLegajo() . " - " . "TURNO: " . $this->GetTurno();
    }

}