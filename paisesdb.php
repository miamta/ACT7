<?php
/**
 *
 */
class paisesdb
{

   private $host="localhost";
   private $user="root";
   private $pass="";
   private $name="world";
   private $conexion;
   private $error=false;
 // Funcion para conectarnos a la base de datos
       function __construct(){
       $this->conexion = new mysqli($this->host, $this->user, $this->pass, $this->name);
       if($this->conexion->connect_errno){
   $this->error=true;
     }
   }
 // Funcion de error
       function geterror(){
         return $this->error;
       }

// Funciones para las consultas

function superficie(){
 return $resultado = $this->conexion->query("SELECT Name, SurfaceArea FROM country ORDER BY SurfaceArea ASC");
  }

function continentes(){
  return $resultado = $this->conexion->query("SELECT Name, continent FROM country order by continent asc");
}

function independencia(){
  return $resultado = $this->conexion->query("SELECT Name, IndepYear FROM country");
}






}
 ?>
