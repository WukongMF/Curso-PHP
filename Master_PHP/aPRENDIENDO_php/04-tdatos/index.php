<?php 

/* 

Tipos de datos:
Int:= 99, es un numero entero
float: Pertenecen los numeros con decimales por ejemplo 2.87
string: va entre comillas dobles, son cadenas de textp, ejemplo "Hola mundo"
Booleano: Es solo falso y verdadero es decir= true, false
null: No lleva nada dentro, dato vacio
Array/arreglo: Es una coleccion de muchos datos
*/

/*
Una variable nunca puede inicar con un numero, pero si puede termianr o contenerlo
tampoco se puede poner el guion medio, operadores(+,-,/,*)
No se recomienda el uso de caracteres especiales como lo son la ñ o tildes*/


$numero = 100; #PHP es un leguaje de tipado debil, identifica solo el tipo
$decimal =36.9;
$texto = "Soy un texto $numero" ;
/*Al string con comillas dobles se le puede dar una variable, si se agrega con comilla simple, lo dara como texto
pero si le pones los puntos para concatenar, si lo hara con las comillas simples(Darnos el valor, ademas es mas rapido que las dobles)                  
*/
/*Los saltos de linea en un string, se puede poner el /n teoricamente, pero en php no funciona,
pero si el index.php se ejecuta en consola si funciona, tampoco sirve el /r, ademas
se le pude meter una tabulacion, pero solo se vera en la consola, no puedo poner comillas dobles,
si quiero imprimir se pone el slash (/") 
*/ 
$verdadero = true;
$vacio= null;
echo gettype($texto);#Para saber el tipo de variable se usa el "gettype"
echo "<br>";
echo $texto;
#echo gettype($vacio);


/*DEBUG
$mi_nombre[]="Fernando Quetzal";
$mi_nombre[]="Fernando Quetzal";

var_dump($mi_nombre);
*/
?>