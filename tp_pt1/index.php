<?php

require_once "empleado.php";
require_once "persona.php";
require_once "fabrica.php";

$humano_uno = new Empleado("Agustin","Gaitan",41639207,"Masculino",109796,20000,"Completo");
$humano_dos = new Empleado("Jorgito","Rodolfo",4125223,"Masculino",51232,20000,"Mañana");
$humano_tres = new Empleado("Karen","Villarreal",4310000,"Femenino",51632,30000,"Completo");
$fabric = new Fabrica("Jorge");

$arr = ["Español", "Francés","Inglés"];
//$arr = ["Español"];
//$arr = ["Español", "Francés","Inglés","Alemán","Checo"];
/*echo $humano_uno->GetNombre();
echo $humano_uno->GetApellido();
echo $humano_uno->GetDni();
echo $humano_uno->GetSexo();
echo $humano_uno->GetLegajo();
echo $humano_uno->GetSueldo();
echo $humano_uno->GetTurno();*/
echo $humano_uno->ToString();
echo $humano_uno->Hablar($arr);

echo "<br>";

$fabric->AgregarEmpleado($humano_uno);
$fabric->AgregarEmpleado($humano_dos);
$fabric->AgregarEmpleado($humano_tres);
$fabric->AgregarEmpleado($humano_dos);

//$fabric->EliminarEmpleado($humano_uno);
$fabric->EliminarEmpleado($humano_tres);


echo "<br>" . $fabric->ToString();






