<?php

include ("class.php");

$sanear = new Sanear();
$datos 	= new Datos();

$sanear->xssproteccion(1);


echo $_GET['url'];
echo "<br><br>";

echo $datos->correo('raicerk<>@gmail.com');
echo "<br><br>";

echo $datos->numeros(1) + $datos->numeros("2 dsadsa");
echo "<br><br>";

echo $datos->texto("<b>hola </b> <li>jdskdjs</li>");
echo "<br><br>";

echo $datos->url("http://raicerk.cl/goog ssd  l");
echo "<br><br>";

?>