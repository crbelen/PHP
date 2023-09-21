<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    /*
    *estructura de control de flujo de seleccion
    *SWITCH es un condicional
    */

    $a = 5;

    switch ($a) {
        case '1':
            echo "a vale 1 <br>";
            break;
        case '2':
            echo "a vale 2 <br>";
            break;
        case '3':
            echo "a vale 3 <br>";
            break;
        case '4':
                echo "a vale 4 <br>";
            break;   
        case '5':
                    echo "a vale 5 <br>";
            break;
        default:
            echo "no vale ninguno de los anteriores valores";
            break;
    }
    echo "<br>". "estamos utilizando el condicional switch"

    ?>



</body>
</html>

