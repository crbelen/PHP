<?php

$array_1 = array (1,"2","3","4");
$array_2 = array ("uno", "dos", "tres", "cuatro");
$array_3 = array ("0", "tres", array("juan", "pepe"));


//imprime el elemento que ocupa la posicion entre corchetes
echo $array_1[1]."<br>";//br salto de linea en el navegador


//imprime el array completo 
print_r($array_2);

echo "<br>";

print_r($array_3); 

echo "<br>". "<br>";


#ARRAYS ASOCIATIVOS (clave-valor)
$arra_ass = array (
'1'=> 'valor1',
'2'=> 'valor2',
'3'=>'valor3',
);

//para acceder al valor2 tendremos que acceder a su clave
echo $arra_ass[2];
echo "<br>";

echo "<pre>"; //nos formatea el texto y nos muestra el array en pantalla de forma mas clara
print_r($arra_ass);
echo "</pre>";

echo "<br>";

#FUNCION para ver si algo es un array 
is_array ($arra_ass);
echo "<br>";

//operador ternario para imprimir si o no en caso de que sea o no un array
echo ((is_array($arra_ass))? "si" : "no");
echo "<br>";
echo "<br>";

//FUNCION var_dump: muestra el tipo de variable y su contenido de manera estructurada
var_dump($array_1);

echo "<br>";
echo "<br>";

var_dump($array_3);



//ver mas funciones en la doc de php.net

?>
