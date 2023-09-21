<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        /*COOKIES: pequeño fragmento de texto que el sitio Web envía al navegador,
        se almacena en el pc del usuario y permite que el sitio web almacene info del visitante
        (recordar idioma, credenciales, anuncios personalizados)

        los navegadores permiten configurar el comportamiento, tb permiten visualizar las cookies.

        cookies de terceros -> cookies de un sitio que no es el que estás visitando. ej: boton me gusta
        en una web que no es facebook
        */

        //DEFINIR una cookie
        echo "setcookie()";
        echo "<br>:::::::::::::::::::::::::<br>";
        //se puede definir cuando expira, si no se lo digo no caducaria nunca.

        setcookie("noexpira", 1);
        setcookie("micookie", 2, time() + 20 ); //con time() recojo la hora actual, +20 el tiempo de expiracion

        echo "<br>:::::::::::::::::::::::::<br>";
        echo "OBTENER una cookie";
        echo "<br>:::::::::::::::::::::::::<br>";
        
        
        //OBTENER una cookie $_COOKIE
        //comprobar si existe una cookie a traves de una variable superglobal
        //isset() determina si una variable está definida

        setcookie("idioma", "esp");

        if ($_COOKIE['idioma'] == "esp"){
            echo "Tu idioma es español";
        }

        echo "<br>:::::::::::::::::::::::::<br>";
        echo "ELIMINAR una cookie";
        echo "<br>:::::::::::::::::::::::::<br>";
        
        
        //ELIMINAR una cookie $_COOKIE
        
        //borrar la cookie del array $_COOKIES con unset().
        //con unset() continua la cookie en el navegador así que si recargo vuelve a aparecer

        unset($_COOKIE['noexpira']);

        //definir una fecha de caducidad del pasado

        setcookie("noexpira","", time() -1);





    ?>
    
</body>
</html>