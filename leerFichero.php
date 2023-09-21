<?php

/*creamos una variable con fopen que recibe dos parametros, el fichero
con ruta completa y el modo en el que se abre(lectura= r)*/

$file = fopen('fichero0.txt', 'r');//abrimos fichero

print_r($file);//nos va a devolver un puntero al fichero (id)
echo "\n";


//para leer el fichero, recorremos caracter a caracter
 while(!feof($file)) { //feof es end of file.
    echo fgetc($file);
 }

 fclose($file);//cerramos fichero


 //FILE GET CONTENTS te lee el fichero de una sola vez
 $file1 = file_get_contents('fichero0.txt');
 echo "--------------------------------------". "\n";
 print_r($file1);

 //con la instruccion FILE pasamos a un array el fichero completo
 $lineas = file('fichero0.txt');

 echo "--------------------------------"."\n";
 print_r($lineas);
 //die("con la instruccion DIE paramos ejecucion donde ponemos la instruccion DIE para ver lo que está ocurriendo");

 //ahora podemos leer por lineas el fichero
 foreach($lineas as $num_linea => $linea){
    echo "Linea #" . $num_linea. " : " . $linea . "\n";
 }
