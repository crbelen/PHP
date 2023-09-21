<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    //funcion que le pasamos parametro por valor, pasamos una copia de la variable (fuera de la funcion la variable no cambia)

    echo "por valor <br>";

    function sumar( $x){
        $x++;
        echo $x . "<br>";
    }


    $a = 10;

    sumar($a);//dentro de la funcion la variable a incrementa en uno, pero no cambia la variable fuera de la funcion al pasar parametro por valor

    echo "<br>". "-------------------" . "<br>";

    echo "mi variable fuera de la funcion es: ". $a. "<br>";

    echo "<br>". "-------------------" . "<br>";

    //funcion pasamos parametro por referencia & (pasamos la propia variable)

    echo "por referencia <br>";

    function restar(&$y){
        $y--;
        echo $y . "<br>";
    }

    $b = 5;

    restar($b);// al pasar parametro por referencia añadiendole delante &, la variable se modifica tras llamar a la funcion.
    
    echo "<br>". "-------------------" . "<br>";

    echo "mi variable fuera de la funcion es: ". $b . "<br>";
    ?>


</body>
</html>

