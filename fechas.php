<?php

$f = "01/05/2023";

//le damos formato
$format = "Y-m-d";

$fecha = date ($format, strtotime ($f));//strtotime la pone en formato unix

echo $fecha. "\n";

//el ultimo dia del mes con la t
echo date("Y-m-t"). "\n";

//obtener fecha actual
print_r (getdate(time())). "\n";

//fecha local
print_r(localtime(time())). "\n";

//OPERACIONES CON FECHAS

//sumar 30 días, tambien se le pueden restar con el signo -. y puede ser day, month o year
$date_n="2022-11-05";
$date_futuro= strtotime("+ 30 day", strtotime($date_n));

echo date ("d-m-Y", $date_futuro)."\n";

//para añadir la hora
echo date("d/m/Y H:i:s");


