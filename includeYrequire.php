<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /*los scripts suelen ser muy grandes y hay que dividirlos en 
    paginas con include o con require*/

    echo "Hola desde includeYrequire.php <br>";

    include "script2.php"; //include si no encuentra el script lanzará un error pero seguirá la ejecucion

    require "script2.php"; //si no encuentra el script lanza error y no se puede seguir


    //los incluyen una sola vez, tienen en cuenta que no esten ya incluidos en algun sitio del programa
    //include_once
    //require_once

    echo ":::::::::::::::::::::::::::::::::::::::<br>";

    echo "include". "<br>";

    include "script2.php";

    echo ":::::::::::::::::::::::::::::::::::::::<br>";

    echo "include_once <br>";

    include_once "script2.php";

    ?>


</body>
</html>

