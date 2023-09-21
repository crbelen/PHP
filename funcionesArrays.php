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
        *FUNCIONES DE ARRAYS
        *Permiten interactuar con arrays y manipularlos
        *Forman parte del núcleo de PHP
        */

        echo "FUNCION COMPARAR - array_diff()". "<br>";
        #me devuelve los valores del primer array que no esten en ninguno de los otros arrays

        $numeros1 = array(11, 22, 33);
        $numeros2 = array(11, 33, 55);

        $colores1 = array ("color1"=> "rojo", "color2"=> "verde", "color3"=> "azul", "color4"=> "naranja");
        $colores2 = array ("color1"=> "verde", "color2"=> "azul", "color3"=> "amarillo");

        $diferencias1 = array_diff($numeros1, $numeros2);
        var_dump($diferencias1);

        echo "<br>";
        
        $diferencias2 = array_diff($colores1, $colores2);
        var_dump($diferencias2);

        echo "<br> FUNCION UNIR - array_merge() <br>";
        #Combina los elementos de uno o más arrays
        #los valores de uno se unen al final del anterior
        #devuelve el array resultante

        $unido = array_merge($colores1, $numeros2);
        var_dump($unido);

        echo "<br>";

        $unido2 = array_merge($numeros1, $numeros2);
        print_r($unido2)



?>

</body>
</html>