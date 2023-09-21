<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    
    //recursividad: funciones que se llaman a sí mismas durante su propia ejecución.

    function factorial($n){
        if($n == 1){
            return 1;
        }
        else{
            echo $n. "x";
            return $n * factorial($n - 1);
        }
    }

        $resultado2 = factorial(5);

        echo "<br>";
        echo $resultado2;
    


    ?>
</body>
</html>