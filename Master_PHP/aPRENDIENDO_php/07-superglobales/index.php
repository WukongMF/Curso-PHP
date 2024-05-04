<?php


//Variables superglobales
//variables de servidor

//IP
echo'<h1>';
echo $_SERVER['SERVER_ADDR'];
echo'</h1>';

//Nombre del server/dominio
echo'<h1>';
echo $_SERVER['SERVER_NAME'];
echo'</h1>';

//tecnologia y software usado
echo'<h1>';
echo $_SERVER['SERVER_SOFTWARE'];
echo'</h1>';


//Navegador Usado
echo'<h1>';
echo $_SERVER['HTTP_USER_AGENT'];
echo'</h1>';

//Ip del cliente o usuario
echo'<h1>';
echo $_SERVER['REMOTE_ADDR'];
echo'</h1>';



?>