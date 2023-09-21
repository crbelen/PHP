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
        * FUNCIONES PARA MODIFICAR ARRAYS
        * nos permiten modificar el contenido de un array
        */
        
        $frutas = array("naranja", "platano", "manzana", "frambuesa");
        var_dump($frutas);

        echo "<br>........................<br>";
        echo "array_shift() <br>";
        //quita el primer elemento del array y me devuelve ese elemento

        $eliminado = array_shift($frutas);

        var_dump($eliminado);

        echo "<br>";
        print_r($frutas);

        echo "<br>........................<br>";
        echo "array_unshift() <br>";
        //añade los elementos pasados al inicio del array y devuelve el numero de elementos del array


        $añadido = array_unshift($frutas, "pera");
        var_dump($añadido);
        echo "<br>";

        var_dump($frutas);

        echo "<br>........................<br>";
        echo "array_pop() <br>";
        //Quita el ultimo elemento del array y lo devuelve

        $frutas2 = array("platano", "manzana", "frambuesa");
        var_dump($frutas2);
        echo "<br>";

        $eliminado1 = array_pop($frutas2);
        echo "eliminado ===> <br>";
        var_dump($eliminado1);
        
        echo "<br>";
        var_dump($frutas2);


        echo "<br>........................<br>";
        echo "array_push() <br>";
        //añade los elementos pasados al final del array y devuelve el numero de elementos del array
        
        $añadido2 = array_push($frutas2, "sandia");
        var_dump($añadido2);
        echo "<br>";

        var_dump($frutas2);


    ?>
</body>
</html>