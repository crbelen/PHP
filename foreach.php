<?php

#FOREACH se utiliza exclusivamente para recorrer arrays u objetos

$arr = array ("uno", "dos", "tres");

foreach ($arr as $value){
    echo $value. "<br>";
}

echo "::::::::::::::::::::::::::::::::"."<br>";

$arr = array (
    "1"=> "uno",
    "2"=> "dos", 
    "3"=> "tres",
);

foreach ($arr as $key => $value) {
    echo $key. "= ". $value. "<br>";
}



?>