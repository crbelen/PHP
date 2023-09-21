<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
#WHILE evalua la expresion y mientras es true se ejecuta la sentencia
echo "while";
echo "<br>";
$a = 10;
$b = 5;

while( $a != $b){
    echo $b . "<br>";
    $b++;
}

//DO...WHILE primero ejecuta  y despues evalua la expresion para continuar o no

echo "_____________". "<br>";
echo "do-while";
echo "<br>";

$c = 2;
$d = 8;

do {
    echo $c . "<br>";
    $c++;

}while ($c <= $d);

?>

</body>
</html>


