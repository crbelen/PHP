<?php
//las constantes se declaran con la funcion define o la palabra reservada const

const PI = 3.141592 ;

define ( "MI_CONSTANTE", "HOLA");


echo PI. '<br>';

#constante array
define ("MI_ARRAY", array( "2", "3"));

#como le asignariamos una constante a una variable
$_miconstante = MI_CONSTANTE;

echo MI_CONSTANTE . "<br>";

echo $_miconstante . "<br>";

//para imprimir arrays
print_r (MI_ARRAY);

echo '<br>';

print_r (MI_ARRAY[0]);




