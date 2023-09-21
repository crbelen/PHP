<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "redondear con la precision indicada";
        echo "<br>:::::::::::::::::::::::::::::::<br>";

        echo (round(0.60));
        echo "<br>";
        echo (round(0.50));
        echo "<br>";
        echo (round(0.49));
        echo "<br>";
        echo (round(-4.40));
        echo "<br>";
        echo (round(4.96754, 2));//especifico que quiero una precision de dos decimales
        echo "<br>";


        echo "redondear hacia arriba al siguiente entero";
        echo "<br>:::::::::::::::::::::::::::::::<br>";

        echo (round(1.50, 0, PHP_ROUND_HALF_UP));
        
        echo "<br>:::::::::::::::::::::::::::::::<br>";
        echo "redondear hacia abajo al siguiente entero";
        echo "<br>:::::::::::::::::::::::::::::::<br>";
        
        echo (round(1.50, 0, PHP_ROUND_HALF_DOWN));
        
        echo "<br>:::::::::::::::::::::::::::::::<br>";
        echo "redondear hacia el  numero PAR";
        echo "<br>:::::::::::::::::::::::::::::::<br>";

        echo (round(2.50, 0, PHP_ROUND_HALF_EVEN));

        echo "<br>:::::::::::::::::::::::::::::::<br>";
        echo "redondear hacia arriba al siguiente entero";
        echo "<br>:::::::::::::::::::::::::::::::<br>";

        echo (ceil(0.60));
        echo "<br>";
        echo (ceil(5));
        echo "<br>";
        echo (ceil(5.1));
        echo "<br>";

        echo "<br>:::::::::::::::::::::::::::::::<br>";
        echo "redondear hacia abajo al siguiente entero";
        echo "<br>:::::::::::::::::::::::::::::::<br>";

        echo (floor(0.60));
        echo "<br>";
        echo (floor(5));
        echo "<br>";
        echo (floor(5.1));
        echo "<br>";
    ?>

</body>
</html>