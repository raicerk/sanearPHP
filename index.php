<?php

include ("class.php");

$sanear = new Sanear();
$datos 	= new Datos();

$sanear->xssproteccion(0);


echo $_GET['url'];
echo "<br><br>";
echo $datos->correo('raicerk>@gmail.com');
echo "<br><br>";
echo $datos->numeros(1) + $datos->numeros("2 dsadsa");

?>