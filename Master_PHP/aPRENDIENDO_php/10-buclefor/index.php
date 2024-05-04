<?php

/* for
for(variable_contador, condicion, incremento contable){
    BLOQUE DE INSTRUCCIONES
}
*/

/*
$resultado=0;

for($i=0; $i<=100;$i++){
    $resultado+= $i;
    echo"<p>$resultado<p/>";
}

echo "<h1>EL reusltado es: $resultado</h1>";


*/
//Tablas de multiplicar


if(isset($_GET['numero'])){

    //cambiar tipo de dato, no me funciona como esta
    $numero =(int)$_GET('numero');
}else{
    $numero=1;
}
var_dump($numero);

echo "<h1>Tabla de multiplicar del numero $numero</h2>";


for($contador=1;$contador <=10;$contador++){

if($numero==45){
    echo "No se puede mostrar estas operaciones";
    break;
}
    echo "$numero x $contador =".($numero*$contador)."</br>";

}



?>