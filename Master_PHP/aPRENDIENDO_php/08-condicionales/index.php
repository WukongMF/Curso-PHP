<?php

/*Condicionales

El mas usado y orincipal es el IF:
    if(condicion){
        instrucciones
    }else{
        otras instrucciones
    }
*/


/*OPERADORES DE COMPARACION

== igual
=== identico, mas exacto
!= diferente
<> diferente
!== no identico
< menor que
>mayor que
<= menor o igual que
>= mayor o igual que



*OPERADORES LOGICOS

&& AND(Y)
|| OR(O)
! NOT(NO)
and, or
*/


//Ejemplo 1



$color="amarillo";



if($color=="rojo"){
    echo "EL COLOR ES ROJO";
}else{
    echo "el color NO es rojo";
}

echo"<br>";


//Ejemplo 2

$year=2018;

if($year!=2019){
    echo "Es un año diferente a 2019";
}else{
    echo "Es 2019";
}


//Ejemplo 3

echo "<hr>";

$edad = 87;
$continente= "America";
$ciudad= "Guanajuato";
$mayoria = 18;
$nombre = "David Huerta";

if($edad >= $mayoria){
    echo "<h1>$nombre es mayor de edad</h1>";

    if($continente=="America"){
        echo "<h2>y es de $ciudad</h2>";
    }else{
        echo "No es de Europa";
    }
    
}else{
    echo "<h2>$nombre no es mayor de edad </h2>";
}



//Ejemplo If anidados, else if, elif
echo "<hr>";

$dia=3;
if($dia==1){
    echo "LUNES";
}elseif($dia==2){
    echo "MARTES";
}elseif($dia==3){
    echo "MIERCOLES";
}elseif($dia==4){
    echo "JUEVES";
}elseif($dia==5){
    echo "VIERNES";
}
echo"<hr>";

//EJEMPLO 5

$edad1=18;
$edad2=64;
$edad_oficial=20;

if($edad_oficial>=$edad1 && $edad_oficial<=$edad2){
    echo "ESTA EN EDAD DE TRABAJAR";
}else{
    echo"NO PUEDE TRABAJAR";
}


//EJEMPLO 6
echo "<hr>";

$pais="Mexico";

if($pais=="Mexico" || $pais=="España" || $pais=="Colombia"){
    echo "En este pais se habla español";
}else{
    echo "No se habla español";
}

echo"<br>";
echo "<hr>";

//EJEMPLO 7: SWITCH

$dia5=6;

switch($dia5){
    case 1:
        echo "LUNES";
        break;
    case 2:
        echo "MARTES";
        break;
    case 3:
        echo "MIERCOLES";
        break;   
    case 4:
        echo "JUEVES";
        break;
    case 5:
        echo "VIERNES";
        break;
    default:
        echo "ES FIN DE SEMANA";
}

echo "<br>";
//GOTO
goto marca;
echo "<h3>INSTRUCCION 1</h3>";
echo "<h3>INSTRUCCION 2</h3>";
echo "<h3>INSTRUCCION 3</h3>";
echo "<h3>INSTRUCCION 4</h3>";

marca:
echo "me he saltado 4 echo";

?>