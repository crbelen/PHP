<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "comprobar si un valor es numerico". "<br>";
        echo "::::::::::::::::::::::::::::::::::::::::: <br>";

        $nota = 7.34;

        if (is_int($nota)){
            echo "nota es un entero";
        }elseif(is_float($nota)){
            echo "nota es un decimal";
        }
        echo "<br> ::::::::::::::::::::::::::::::::::::::::: <br>";
    
        echo "dar formato a un numero";
        echo "<br>::::::::::::::::::::::::::::::::::::::::: <br>";

        echo number_format("1000000"). "<br>";

        echo number_format("1000000", 2). "<br>";//pasamos numero de decimales por parametro

        echo number_format("1000000", 2, ",", "."). "<br>";//coma para decimales, punto para puntos de millar

        


            


    ?>
</body>
</html>