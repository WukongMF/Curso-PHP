<?php
//operadores aritmeticos
$numero1= 55;
$numero2=45;

echo 'Suma:  '.($numero1+$numero2);
echo "<br>";
echo 'Resta:  '.($numero1-$numero2);
echo "<br>";
echo 'Multiplicacion:  '.($numero1*$numero2);
echo "<br>";
echo 'Division:  '.($numero1/$numero2);
echo "<br>";
echo 'Porcentaje/resto:  '.($numero1%$numero2);



//Operadores de incremento y decremento

$year=2019;
//$year--;Resta uno a la variable
//++$year;Añade 1, es como poner 1+, por ejmplo: $year=$year+1; 
//Los signos se pueden poner despues del nombre de la variblae y antes del signo de dolar.


echo "<h1>$year</h1>";

//Operadores de asignacion

$edad=55;

echo $edad.'<br>';

//$edad = $edad + 5; Esto se puede hacer con todos los operadores

echo $edad+=5;
var_dump($edad);



?>