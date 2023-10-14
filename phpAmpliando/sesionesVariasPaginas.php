<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        //PROPAGAR SESIONES ENTRE VARIAS PAGINAS

        session_start();//inicio sesion

        //defino algunas variables dentro del array asociativo que me lo permite
        $_SESSION["iniciada"] = true;
        $_SESSION["nombre"] = "Belen";
        $_SESSION["edad"] = 40;

        echo "Identificador de la sesion: ". session_id();
        echo "<br>";
        echo "Nombre de la sesion: ". session_name();
        echo "<br>";

        echo "Nombre: ". $_SESSION["nombre"];
        echo "<br>";
        echo "Edad:  ". $_SESSION["edad"];
        echo "<br>";

        //ponemos dos links
        echo "<a href= 'sesionPagina3.php'> Comprobar los valores en otra web </a>";
        echo "<br>";
        echo "<a href= 'sesionPagina4.php'> Finalizar sesion </a>";

    ?>
</body>
</html>