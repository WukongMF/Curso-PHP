<?php

/*Ejercico 1: Crear dos cariables "Pais" y "continente" y mostrar
su valor por pantalla(Imprimir), despues en un comentario que tipo de dato tienen.  */


$pais="Mexico";
$continente="America";
/*En las siguientes tres linea de codigo se hace lo siguiente:

linea uno: Se abre un h1 y se manda llamar a las variables
si estan dentro de comillas dobles se concatena solo y no debemos poner puntos.*/
echo "<h1>Hola soy de: $pais y estes se encutra en el continente de: $continente</h1>";
//Salto de linea y raya divisoria
echo "<br>";
echo "<hr>";

var_dump($pais);//Esta variable es de tipo String
echo"<br>";
var_dump($continente);//Esta variable es de tipo String

?>