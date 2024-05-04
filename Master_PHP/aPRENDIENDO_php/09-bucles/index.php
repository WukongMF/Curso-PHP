<?php

/*BUCLE WHILE
Itera o repite una ejecucion de unas serie de instrucciones  n veces en base
a una condicion


while(condicion){
    bloque de instrucciones
    otra instruccion
}*/

$numero= 0;

while($numero <=100){
    echo "$numero";

    if($numero !=100){
        echo ",";
    }
    $numero++;
    if($numero>=101){
        echo"<h3>ES CINE</h3>";
    }
}
echo "<hr>";

//EJEMPLO

if(isset($_GET['numero'])){

    //cambiar tipo de dato, no me funciona como esta
    $numero =(int)$_GET('numero');
}else{
    $numero=1;
}

var_dump($numero);


echo "<h1>Tabla de multiplicar del numero $numero</h2>",

$contador=0;

while($contador <= 10){
    echo "$numero x $contador =".($numero*$contador)."</br>";
    $contador++;
}

/*DO WHILE

do{
    
}while();
*/
echo "<hr>";
echo "<br>";

$contador=1;
$edad=15;

do{
    echo"Tienes acceso al local privados $contador<br/>";
    $contador++;

}while($edad>=18 && $contador <=10);
?>
