<?php

//los cookies se guardan en el cliente y tienen una funcion similar a las session
//para definir un cookie se hace con la variable setcookie
//las sessiones y los cookies funcionan en los navegadores, no en los scripts

setcookie("name", "probando cookies");//podemos ponerle tambien un date() (fecha para que expire)

?>
<a href= "cookies2.php">cookies</a>