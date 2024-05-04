<?php 

//Constantes
//Es un ocntenedor en el cual no cambia su valor

define('nombre', 'Fernando Quetzal');
define('web','Google');




echo '<h1>'.nombre.'</h1>';//La constante se manda llamar sin el signo de dolar($)
echo '<h1>'.web.'</h1>';


$web= "Hola";//Puedo tener una variable y constante que se llamen igual 
//variable, la podre mandar llamar y si la podre modificar
echo '<h1>'.$web.'</h1>';

//COnstantes predefinidas
echo PHP_OS;
echo "<br>";
echo PHP_VERSION;
echo __FUNCTION__;

?>