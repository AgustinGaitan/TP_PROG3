<?php 

   abstract class Persona
   {

      private $_apellido;
      private $_dni;
      private $_nombre;
      private $_sexo;


      public function __construct($nombre, $apellido, $dni, $sexo)
      {
         $this->_apellido = $apellido;
         $this->_dni = $dni;
         $this->_sexo = $sexo;
         $this->_nombre = $nombre;

      }

      public function GetApellido()
      {
         return $this->_apellido;
      }
    
      public function GetDni()
      {
         return $this->_dni;
      }

      public function GetNombre()
      {
         return $this->_nombre;
      }

      public function GetSexo()
      {
         return $this->_sexo;
      }

      abstract function Hablar($idioma);

      public function ToString()
      {
         return "NOMBRE: ". $this->GetNombre() . " - " . "APELLIDO: " . $this->GetApellido() ." - " . "DNI: " . $this->GetDni() . " - ".
         "SEXO: " . $this->GetSexo();
      }


   }
    

