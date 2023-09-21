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
        *FUNCIONES DE FECHA Y HORA
        *Permiten obtener la fecha y la hora del servidor
        *se pueden emplear para dar formato a fechas y horas
        *forman parte del nucleo php
        *su comportamiento depende de php.ini (longitud y latitud definidos, zona horaria)
        */



        echo "<br> *************************<br>";
        echo "date() <br>";
        //devuelve la fech acon un formato concreto
            //d => dia del mes, 2 digitos con ceros iniciales
            //D => una representacion textual de un dia, tres letras
            //j => dia del mes sin ceros iniciales
        
        echo date ("Y");
        echo "<br>";
        echo date ("d M y");// en minuscula me pone el año abreviado
        echo "<br>";
        echo date ("d/m/Y");// en minuscula me pone el mes con digitos
        echo "<br>";
        echo date ("d/m/Y h:i:s");
        echo "<br>";
        echo date ("H:i:s");
        echo "<br>";
        echo date ("l jS \of F Y h:i:s A");
        echo "<br>";

        echo "<br> *************************<br>";
        echo "getdate() <br>";
        //devuelve un array asociativo con informacino de la fecha y hora

        $hoy = getdate();
        var_dump($hoy);

        echo "<br> *************************<br>";
        echo "date_default_timezone_get() <br>";
        //obtiene la zona horaria predeterminada

        echo "zona horaria: ". date_default_timezone_get();
        echo "<br>";

        echo "<br> *************************<br>";
        echo "date_default_timezone_set() <br>";
        //establece la zona horaria predeterminada

        date_default_timezone_set("America/Los_Angeles");

        echo "zona horaria: ". date_default_timezone_get();
        echo "<br>";




    ?>
</body>
</html>