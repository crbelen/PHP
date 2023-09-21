<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        #ESCRIBIR EN FICHEROS

        echo "fwrite() <br> ................... <br>";
        //escribe dentro del archivo y devuelve los bytes escritos
        //fputs() es la misma funcion con otro nombre ( es un "alias")

        echo "fflush() <br> ................... <br>";
        //fuerza a escribir los datos del buffer en el archivo

        $miarchivo = fopen("archivo3.txt", "a+");

        fwrite($miarchivo, "Escribiendo dentro del fichero");

        fflush($miarchivo);


        #FUNCIONES DE ARCHIVO INFORMACION

        echo "stat() <br> ................... <br>";
        //devuelve un array asociativo con informacion del archivo

        echo "filesize() <br> ................... <br>";
        //devuelve el tamaño de un archivo

        echo filesize("archivo3.txt"). "<br>";

        $arrayinfo = stat("archivo3.txt");
        var_dump($arrayinfo) ;
    ?>
</body>
</html>