<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

    //BREAK finaliza la ejecucion de la estructura for, foreach, while, do-while o switch

    for ($i=0; $i <10 ; $i++) { 
        if ($i == 5) {
            break;
        }
        echo $i. "<br>";
    }
    echo "fin". "<br>";

    echo ":::::::::::::::::::::::::::::::::::". "<br>";
   
    //CONTINUE se utiliza dentro de las estructuras for, foreach, while, do-while o switch para pasar a la siguiente iteracion

    for ($i=0; $i <10 ; $i++) { 
        if ($i == 5) {
            continue;//lo que hara es saltarse el 5 y seguir con la iteracion
        }
        echo $i. "<br>";
    }
    echo "fin";

    ?>

</body>
</html>

