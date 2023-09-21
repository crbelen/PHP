<?php

//con las siguientes instrucciones podemos visualizar en la web como EL SERVIDOR ha recogido el archivo el formulario
echo "<pre>";
print_r ($_FILES);
echo "<br>";
echo "_______________________". "<br>";
/*para recoger los valores del formulario lo hacemos con la variable POST, 
*que es el metodo definido en el formulario, y el nombre que le hemos dado al input
*/
echo $_POST["nombre"];

//MOVEMOS EL FICHERO SUBIDO DEL SERVIDOR A LA RUTA QUE NOS INTERESE
$uploads_dir = 'C:\xampp\htdocs\practicando\uploads';//ruta donde guardar archivo subido al formulario
$tmp_name = $_FILES["fichero"]["tmp_name"];//fichero en servidor
$name = $_FILES["fichero"]["name"];//nombre con el que se va a guardar el fichero en la ruta

move_uploaded_file($tmp_name, "$uploads_dir/$name");
