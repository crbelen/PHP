<?php
//las variables llevan el simbolo del dolar delante

$variable = "Hola";
$numero = 23;

//puedo definir una variable sin darle valor
$sueldo;

//el punto sirve para concatenar distintas variables
//el salto de linea se pone con "\n"
echo "tengo una variable ". $numero . "<br>";

//si utilizo entrecomillado doble no es necesario concatenar con el punto
echo "hola con la variable,  $variable \n";
echo "<br>";
echo $numero . "<br>";

//variables boleanas
$boleanas = true;

echo $boleanas;
echo "<br>";

//si quiero que me salga el valor de boleanas tengo que usar funcion json_encode
echo json_encode($boleanas);
?>