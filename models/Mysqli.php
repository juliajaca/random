<?php

namespace models;

class Mysqli {

   public $conexion;

   public function __construct($servidor, $usuario, $password, $bd){
       $this->conexion = new \mysqli($servidor, $usuario, $password, $bd);
   }

  

// FIn de la clase
}
?>