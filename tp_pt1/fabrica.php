<?php

require_once "empleado.php";

class Fabrica
{
    private $_cantidadMaxima;
    private $_empleados;
    private $_razonSocial;


    public function __construct($_razonSocial)
    {
        $this->_razonSocial = $_razonSocial;
        $this->_empleados = array();
        $this->_cantidadMaxima = 5;
    }

    public function AgregarEmpleado($emp)
    {   
        
        if(count($this->_empleados) < $this->_cantidadMaxima)
        {   
            
            array_push($this->_empleados, $emp);
            $this->EliminarEmpleadoRepetido();
        }
    }

    public function CalcularSueldos()
    {
        $total = 0;

        
        foreach($this->_empleados as $item)
        {
            $total += $item->GetSueldo();          
        }
       
        return $total;
    }

    public function EliminarEmpleado($emp)
    {
        for($i = 0; $i< count($this->_empleados);$i++)
        {
            if($this->_empleados[$i] == $emp)
            {
                unset($this->_empleados[$i]);
                $this->_empleados = array_values($this->_empleados);
            }
        }

    }

    private function EliminarEmpleadoRepetido()
    {
        $this->_empleados = array_unique($this->_empleados,SORT_REGULAR);
    }

    public function ToString()
    {
        $cadena ="";

        foreach($this->_empleados as $item)
        {
            $cadena .= $item->toString() . "<br>";
        }
        
        $cadena .="<br>" .  "Cantidad máxima de empleados: " .$this->_cantidadMaxima . " - " . "Razón social: " . $this->_razonSocial . " - "
        . "Total sueldos: ". $this->CalcularSueldos() . "<br>";

        return $cadena;
    }


}