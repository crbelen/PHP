<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //VARIAS MATEMATICAS

    echo "<br>:::::::::::::::::::::::::::::::<br>";
        echo "abs() valor absoluto";
        echo "<br>:::::::::::::::::::::::::::::::<br>";

        echo (abs(-6.7));

        echo "<br>:::::::::::::::::::::::::::::::<br>";
        echo "max()";
        echo "<br>:::::::::::::::::::::::::::::::<br>";

        echo (max(2, 4, 6, 8, 10));


        echo "<br>:::::::::::::::::::::::::::::::<br>";
        echo "min()";
        echo "<br>:::::::::::::::::::::::::::::::<br>";

        echo (min(2, 4, 6, 8, 10));

        echo "<br>:::::::::::::::::::::::::::::::<br>";
        echo "rand() obtener un numero aleatorio";
        echo "<br>:::::::::::::::::::::::::::::::<br>";

        echo (rand());
        echo "<br>";
        echo(rand(10, 100));

        echo "<br>:::::::::::::::::::::::::::::::<br>";
        echo "sqrt() muestra la raiz cuadrada";
        echo "<br>:::::::::::::::::::::::::::::::<br>";

        echo (sqrt(9));

        echo "<br>:::::::::::::::::::::::::::::::<br>";
        echo "decbin() transforma de decimal a binario";
        echo "<br>:::::::::::::::::::::::::::::::<br>";

        echo decbin("3");

        echo "<br>:::::::::::::::::::::::::::::::<br>";
        echo "bindec() transforma de binario a decimal";
        echo "<br>:::::::::::::::::::::::::::::::<br>";

        echo bindec("1011");

        echo "<br>:::::::::::::::::::::::::::::::<br>";
        echo "dechex() transforma de decimal a hexadesimal";
        echo "<br>:::::::::::::::::::::::::::::::<br>";

        echo dechex("10");

        echo "<br>:::::::::::::::::::::::::::::::<br>";
        echo "hexdec() transforma de hexadesimal a decimal";
        echo "<br>:::::::::::::::::::::::::::::::<br>";

        echo hexdec("1011");

    ?>
</body>
</html>