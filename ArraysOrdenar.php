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
        *FUNCIONES DE ORDENAR ARRAYS
        */

        echo "sort() <br>";
        //actua sobre el propio array, no crea uno nuevo
        // ordena de menor a mayor
        
        $dias = array("Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado", "Domingo");

        var_dump($dias);
        echo "<br>..............................<br>";

        sort($dias);
        var_dump($dias);


        echo "<br>..............................<br>";
        echo "<br> rsort() Ordena en orden inverso <br>";
        
        rsort($dias);
        print_r($dias);

        echo "<br>..............................<br>";
        echo "<br> asort() <br>";
        //ordena y mantiene la asociación de keys

        asort($dias);
        var_dump($dias);

        echo "<br>..............................<br>";
        echo "<br> ksort() <br>";
        //ordena el array por sus keys de menor a mayor

        $arraynombres = array("Javier" => "19", "Patricia" => "28", "Emilio" => "26");
        
        print_r($arraynombres);
        echo "<br>";

        ksort($arraynombres);
        var_dump($arraynombres);

        echo "<br>..............................<br>";
        echo "<br> shuffle() <br>";
        //crea un orden aleatorio de los elementos
        //asigna nuevos keys a los elementos

        $dias1 = array("Lunes", "Martes", "Miercoles", "Jueves", "Viernes");
        
        var_dump($dias1);
        echo "<br>";

        shuffle($dias1);
        var_dump($dias1);




    ?>
</body>
</html>