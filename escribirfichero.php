<?php

$fp = fopen('datos.txt', 'w');

fwrite($fp, "Hola, ");
fwrite($fp, "estoy escribiendo en el archivo de texto datos desde php");

fclose($fp);

//con el comando cat seguido del nombre y extension del archivo, vemos lo que se ha escrito en el archivo por consola


//FILE PUT CONTENTS nos ahorra abrir y cerrar el flujo, lo hace todo de una.
file_put_contents('datos2.txt', "Hola soy Belen y sigo aprendiendo php");

/*si tenemos el fichero en otra ruta que no sea el proyecto en el que estamos trabajando, 
tenemos que indicar la ruta completa, no solo el nombre y extension del fichero*/

//para saber si es un fichero
if (is_file("datos2.txt")){
    echo "Es un fichero";
}else{
    echo "no es un fichero";
}

echo "\n";

//para saber si es un directorioi
if(is_dir("C:/xampp/htdocs/practicando")){
    echo "Es un directorio";
}else{
    echo "no es un directorio";
}