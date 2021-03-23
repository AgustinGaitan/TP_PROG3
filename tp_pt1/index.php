<?php

require_once "empleado.php";
require_once "persona.php";


$humano = new Empleado("Agustin","Gaitan",41639207,"Masculino",109796,20000,"Completo");

/*echo $humano->GetNombre();
echo $humano->GetApellido();
echo $humano->GetDni();
echo $humano->GetSexo();
echo $humano->GetLegajo();
echo $humano->GetSueldo();
echo $humano->GetTurno();*/
echo $humano->ToString();






