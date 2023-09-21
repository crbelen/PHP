<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
//ambito de las variables

$numero1 = 21;

function prueba(){

    //con global conseguimos que la variable creada fuera de la función, exista también dentro de ella
    global $numero1;
    echo $numero1;
}



?>
</body>
</html>