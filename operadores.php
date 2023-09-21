<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    #OPERADORES

    $num1 = 5;
    $num2 = 10;

    //operadores aritmeticos
    echo "operadores aritmeticos:";
    echo "<br>";

    $total = $num1 + $num2;
    echo $total;

    echo "<br>";


    echo $num1. "x" . $num2. "=" . $num1 * $num2;
    echo "<br>";

    echo $num2. "/" . $num1. "=" . $num2 % $num1;
    echo "<br>";

    echo $num1. " elevado a " . $num2. "=" . $num1 ** $num2;
    echo "<br>";

    //operador de asignacion
    $a = $b = $c = "hola";

    echo "operadores de asignacion:". "<br>";

    echo $a . "<br>" . $b . "<br>" .  $c ."<br>" ;

    //operadores de incremento
    $a = 5;
    echo "operadores de incremento:"."<br>";

    echo $a;
    echo "<br>";

    echo "post incremento: primero lo muestra y luego lo incrementa";
    echo $a++;//lo incrementa pero sin imprimir el incremento
    echo "<br>";

    echo $a;
    echo "<br>";

    #el preincremento, para que lo imprima directamente es asi
    echo "Preincremento: lo incrementa y lo muestra";
    echo "<br>";
    
    $b = 2;
    echo ++$b;
    echo "<br>";

    echo "operadores de concatenacion";
    echo "<br>";

    $c = "juan";
    $d = $c . " lopez";

    $e = "pedro";
    $e .= " García";

    echo $d;
    echo "<br>";

    echo $e;

    //operadores de comparacion
    //devuelven true o false

    //el identico se representa con tripe = y significa que es mismo valor y mismo tipo de valor
    //operador ternario = forma abreviada de if/else

    echo "operadores de comparacion";
 
    echo "<br>";

    $num3 = 5;
    $valor1 = "5";

    if($num1 == $num2){
        echo "num1 y num2 son iguales";
        echo "<br>";
    }

    if ($num1 == $num3) {
        echo "num1 y num3 son iguales";
        echo "<br>";
    }

    if ($num1 === $valor1) {
        echo "num1 y valor1 son identicos";
        echo "<br>";
    }
    
    if ($num1 !== $valor1) {
        echo "num1 y valor1 no son identicos";
        echo "<br>";
    }

    if($num1 != $num2){
        echo "num1 y num2 son distintos";
        echo "<br>";
    }
    
    if($num1 <> $num2){
        echo "num1 y num2 son distintos";
        echo "<br>";
    }

    echo "operadores lógicos: AND o &&, OR o ||, XOR (cierta SOLO una de las dos), NOT o !";
    echo "<br>";

    $num4 = 5;
    $num5 = 10;
    $num6 = 5;
    $num7 = 20;
    $num8 = 5;
    $activo1 = true;
    $activo2 = false;

    if ($num4 == $num6 && $num6 == $num8){
        echo "iguales";
        echo"<br>";
    }
    
    if ($num4 == $num6 or $num6 == $num8){
        echo "iguales";
        echo"<br>";
    }
    
    if ($num4 == $num6 xor $num7 == $num8){
        echo "iguales";
        echo"<br>";
    }

    if (!$activo1){
        echo "Dentro";
        echo"<br>";
    }

    

    ?>
</body>
</html>

