<?php


$cadena = "hola mundo";

$arr = array ("1", "2", "3");

//vamos a buscar la longitud de una cadena
echo strlen($cadena). "\n";

echo "------------------". "\n";

//obtener un substring de una cadena
echo substr($cadena, 2, 5). "\n";

echo "------------------". "\n";

//reemplazar texto
echo str_replace("o","a", $cadena). "\n";;

echo "------------------". "\n";

//dividir un string en varios string
print_r (explode(" ", $cadena));//divide por el espacio de la cadena, que es lo que hemos indicado en las comillas

//convertimos un array en un string
echo implode(", ", $arr). "\n";

echo "------------------". "\n";

//obtener los valores de las claves de un array
$arrayb = array (
    '1'=> 'uno',
    '2'=> 'dos',
);

print_r(array_keys($arrayb)). "\n";

echo "------------------". "\n";

//unir dos arrays
$array3 = array_merge($arr, $arrayb);
print_r($array3). "\n";

echo "------------------". "\n";

//eliminar elementos de un array
unset($array3[3]);

print_r($array3);


