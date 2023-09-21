<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
//practicando if
$a = 5;
$b = 10;
$nota1 = 2;
$nota2 = 8;
$nota3 = 5;

echo "if: ";
echo "<br>";

if($nota2 >= 5){
    echo "Aprobado";
    echo "<br>";
}

// con sintaxis alternativa
if($nota2 >= 5):
    echo "Aprobado";
    echo "<br>";
endif;


if($a == $b){
    echo "son iguales";
    echo "<br>";
}
else{
    echo "no son iguales";
    echo "<br>";//salto de linea
}

echo "\n" . "\n";//salto de linea


//elseif : si if es falso me va a comprobar la condicion del elseif...

if($a == $b){
    echo "son iguales";
}
elseif ($a < $b) {
    echo "a es menor que b";
}
else{
    echo "a es mayor que b";
}

?>   


</body>
</html>
