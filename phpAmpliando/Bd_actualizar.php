<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        //capturo del formulario el campo que quiero insertar
        $minombre = $_GET["nombreactualizar"];

        //capturo del formulario el campo que voy a actualizar
        $modificar = $_GET["seleccionar"];

        //definimos variables 
        $servidor = "localhost";
         $usuario = "root";
        $password = "";
    
        $conexion = mysqli_connect($servidor, $usuario, $password) or die("Error de conexion");
        //or die me muestra el error y me finaliza el script

        //seleccionamos la base de datos
        mysqli_select_db($conexion, "pruebaphp");

        $sql = "UPDATE clientes SET nombre = '$minombre' WHERE nombre = '$modificar'";

        mysqli_query($conexion, $sql);
        



    ?>
    
</body>
</html>