<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        #DIRECTORIOS

        echo ".............................<br>";
        echo "chdir()";
        echo "<br>.........................<br>";
        //cambia de directorio

        echo ".............................<br>";
        echo "getcwd()";
        echo "<br>.........................<br>";
        //devuelve el directorio actual

        echo ".............................<br>";
        echo "scandir()";
        echo "<br>.........................<br>";
        //enumera ficheros y directorios de la ruta especificada

        echo getcwd();
        echo "<br>.........................<br>";

        $directorio = scandir(getcwd());//le especificamos la ruta actual
        var_dump($directorio);

        echo "<br>.........................<br>";

        chdir("../");
        echo getcwd();


        

    ?>
</body>
</html>