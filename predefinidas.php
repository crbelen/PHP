<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
   //php tiene variables predefinidas

   $numero3 = 33;

   echo "Nombre del Servidor: ". $_SERVER['SERVER_NAME']. '<br>';
   echo "Software del Servidor: ". $_SERVER['SERVER_SOFTWARE']. '<br>';
   echo "Puerto del Servidor: ". $_SERVER['SERVER_PORT'];
   
   ?>
</body>
</html>