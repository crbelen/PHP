<?php
//aquí vamos a recoger los datos del formulario con método get.
//$_GET es un array que recoje todos los datos que se envían a través del formulario y lo muestra por la URL (NO ES SEGURO)

//print_r nos muestra el array
print_r($_GET);

echo "<br>";
//si queremos acceder a un elemento determinado del array
print_r($_GET['usuario']);

?>