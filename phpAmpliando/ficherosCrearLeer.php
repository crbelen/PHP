<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //CREACION Y LECTURA DE FICHEROS
        
        echo "fopen() <br> ................... <br>";
        #ABRIR FICHERO
            //archivo que se quiere abrir
            //modo de apertura
            //devuelve un puntero al archivo (variable que referencia una posicion concreta dentro de un fichero)
        $miarchivo = fopen("archivo1.txt", "r+");//apertura lectura y escritura
        if ($miarchivo == false){
            echo "error al abrir el archivo <br>";
        }

        $miarchivo2 = fopen("archivo3.txt", "w");// al abrir con w automaticamente sobreescribo el archivo.

        $miarchivo3 = fopen("archivo4.txt", "w"); //w tambien me crea el archivo si no existe
        

        #LEER FICHERO
       
        echo "fread <br> ................... <br>";
        //lectura de un fichero utilizando su tamaño
        
        $miarchivo = fopen("archivo1.txt", "r+");//apertura lectura y escritura
        if ($miarchivo == false){
            echo "error al abrir el archivo <br>";
        }else{
            $contenido = fread($miarchivo, filesize("archivo1.txt")); 
            echo $contenido. "<br>";
        }

        echo ".........................<br>";
        echo "fgetc() <br> ................... <br>";
        //obtiene un caracter desde el puntero del archivo

        echo ".........................<br>";
        echo "fgets() <br> ................... <br>";
        //obtiene una linea desde el puntero del archivo

        echo ".........................<br>";
        echo "feof() <br> ................... <br>";
        //comprueba si el puntero del archivo está al final

        echo ".........................<br>";
        echo "rewind() <br> ................... <br>";
        //rebobinar el puntero

        rewind ($miarchivo);
        while (feof($miarchivo) == false){
            echo fgets ($miarchivo). "<br>";
        }
        
        echo ".......................<br>";

        rewind ($miarchivo);
        while (feof($miarchivo) == false){
            echo fgetc ($miarchivo). "<br>";
        }

        echo ".........................<br>";
        echo "file_get_contents() <br> ................... <br>";
        //transmite un archivo completo a una cadena

        echo ".........................<br>";
        echo "file() <br> ................... <br>";
        //transmite un archivo completo a un array

        $todo = file_get_contents("archivo1.txt");
        echo $todo. "<br>";
        
        echo ".......................<br>";

        $array1 = file("archivo1.txt");
        var_dump($array1);

    ?>
</body>
</html>