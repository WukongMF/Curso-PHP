<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Imprimir por pantalla - Master en PHP</title>
    </head>
    <body>
        <h1>Master en PHP - <?php echo "Quetzal242";?></h1>

        <?="Bienvenido al Curso de php" //El doble slash y el gato sirven para ocmentar en php, #Esto sirve como el echo?> 
        
        <?php
        /*IMPORTANTE: No olvidar poner y cerrar con ;, igual si se concatena
        la pagina te lo dira y la linea*/
            echo "<h3>Listado de videojuego:</h3>";
            echo "<ul>"
                . "<li>GTA</li>"
                ."<li>Fifa</li>"
                ."<li>Mario Bros</li>"
                ."</ul>";

            /*Se debe poner en comilla simple, para poder concatenar
            para comentario multilinea se usa slash-asterisco y asterisco-slash
            */
            echo '<p>Esta es toda '.' - '.' lista de juegos</p>'; 
            
        ?>
    </body>