<?php
//las sessiones se guardan en una variable especial que se llama session
//nos permiten navegar entre paginas y verificar que tienen la misma sesion(los mismos valores)
//sirve para hacer validaciones de formularios, para comprobar que el usuario que esta entrando es el que debe

#PARA TRABAJAR CON SESSIONES TENEMOS QUE INICIALIZARLAS
session_start();

$_SESSION['mi_sesion'] = "Soy Belen probando session en php";
//las sessiones se almacenan en el servidor donde se esta ejecutando php
//cerramos  php
?> 

<a href= "sessiones2.php">hola></a>
