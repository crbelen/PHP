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
        *FUNCIONES INTERESANTES
        */

        $frutas = array("naranja", "platano", "manzana", "frambuesa");
        var_dump($frutas);
        
        echo "<br>............................<br>";
        echo "count() <br>";
        //Devuelve el numero de elementos del array

        $elementos = count($frutas);
        echo $elementos;


        echo "<br>............................<br>";
        echo "current() <br>";
        //devuelve el elemento actual del array ( a donde está apuntando el puntero)

        $actual = current($frutas);
        echo ($actual);

        echo "<br>............................<br>";
        echo "end() <br>";
        //mueve el puntero al final del array

        $final = end($frutas);

        $actual1 = current($frutas);
        echo ($actual1);

        echo "<br>............................<br>";
        echo "reset() <br>";
        //rebobina el puntero interno de un array al primer elemento

        reset($frutas);
        
        $actual = current($frutas);
        echo ($actual);


        echo "<br>............................<br>";
        echo "array_search() <br>";
        //busca un valor determinado y devuelve su key

        $meses = array(0 => "enero", 1 => "febrero", 2 => "marzo", 3 => "abril");
        
        $clave = array_search("febrero", $meses);

        if ($clave){
            echo $clave . " =>  ". $meses[$clave];
        }
        else{
            echo "elemento no encontrado.";
        }


    ?>
</body>
</html>