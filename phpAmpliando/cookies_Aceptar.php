<?php
    if(isset($_GET["aceptar"])){
        $caducidad = time() +(60 * 60 *24 *365);//1 año
        setcookie("micookie", "1", $caducidad);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        //ACEPTAR Y HABILITAR COOKIES

        #ACEPTAR LAS COOKIES

        if(!isset($_GET["aceptar"]) && !isset($_COOKIE["micookie"])){
    ?>
    <h2> Cookies </h2>
    <p> Debes aceptar las cookies para poder seguir navegando </p>
    <a href="?aceptar = 1"> Aceptar </a>
    <?php
        }
    ?>
    
</body>
</html>