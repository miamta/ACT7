<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Actividad 20</title>
    <link rel="stylesheet" href="fichero.css">
  </head>
  <body>
    <div class="inicio">

    <button>  <a href="Superficie.php">Superficie</a></button>
    <button>  <a href="Continente.php">Continente</a></button>
    <button>  <a href="Independencia.php">Independencia</a></button>
  </div>

<h1>Paises ordenados por continente</h1>

  <?php
  // conexion a la BD
include "paisesdb.php";
$paises = new paisesdb();

 $resultado=$paises->continentes();

 while($fila=$resultado->fetch_assoc()){
        echo "Name: ".$fila["Name"]."<br>";
        echo "continent: ".$fila["continent"]."<br>";
        echo "<hr>";

 }
   ?>

  </body>
</html>
