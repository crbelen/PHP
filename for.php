
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

    //bucle for

    for( $i = 0, $j = 1; $i <10, $j <11; $i+=2, $j++){
        echo "i: =". $i . "<br>";
        echo "j: =". $j. "<br>";
    }

    echo "_______________________"."<br>";

    for( $i = 0; $i <10; $i++){
        echo "i: =". $i . "<br>";
    }

    //otro ejemplo
    echo "<br>";
    echo "<br>";

    $numero = 5;

    for($i = 1; $i <=10; $i++){
        echo $i;
        echo "<br>";

    }
    
    echo "<br>";
    echo "<br>";
    
    for($j = 10; $j >=1; $j--){
        echo $j;
        echo "<br>";

    }

    echo "<br>";
    echo "<br>";
    #pedir los numeros pares con bucle for

    for($h = 0; $h<=100; $h+=2){
        echo $h;
        echo "<br>";
    }

    echo "_______________________"."<br>";
    
    //otra forma
    for($h = 0; $h<=100; $h++){
        if($h % 2 == 0){
            echo $h;
            echo "<br>";
        }  
    }
    ?>

</body>
</html>

