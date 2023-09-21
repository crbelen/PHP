<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //FUNCIONES

    $var1 = "hola mundo". "\n";

    echo $var1;


    echo "<br>". "-----------------------------". "<br>";

    /* si aquí tuvieramos muchas lineas de codigo

    ......
    y quisieramos volver a imprimir hola mundo, hacemos una funcion y reducimos lineas de codigo*/

    function Hola(){
        
        $var2="hola desde una funcion";
        echo $var2;
    }

    echo Hola();

    echo "<br>". "-----------------------------". "<br>";

    //funciones con parametros
    function Adios($var3 = null){// si igualo el parametro a null puedo llamar a la funcion dando valor al parametro o no dandoselo
        echo $var3. "\n";
        $var4="Estoy es una funcion con parámetros, hasta luego.";
        echo $var4;
    }

    echo Adios("Belen");

    echo "<br>". "-----------------------------". "<br>";

    echo Adios();
    
    echo "<br>". "-----------------------------". "<br>";
    
    $numero1 = 5;
    $numero2 = 10;

    function sumar(){
        echo "soy la funcion sumar <br>";
    }
    
    sumar();

    echo "<br>". "-----------------------------". "<br>";

    function sumarNumeros($n1, $n2){
        echo $n1 + $n2;
    }

    sumarNumeros($numero1, 5);

    echo "<br>". "-----------------------------". "<br>";

    function sumarNumerosRetorno($n1, $n2){
        return $n1 + $n2;
    }

    $resultado = sumarNumerosRetorno(5, $numero2);

    echo $resultado;
    

    ?>

</body>
</html>


