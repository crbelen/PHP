<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

          //inserccion de datos en base de datos desde formulario


        $minombre = $_GET["nombreInsert"];// id que necesitamos capturar del formulario


          //definimos variables 
        $servidor = "localhost";
        $usuario = "root";
        $password = "";
        
        $conexion = mysqli_connect($servidor, $usuario, $password) or die("Error de conexion");
        //or die me muestra el error y me finaliza el script

        mysqli_select_db($conexion, "pruebaphp");//seleccionamos la base de datos

        $insertar = "INSERT INTO clientes (nombre) VALUES ('$minombre')";

        if(mysqli_query($conexion, $insertar)){
            //ejecutamos la consulta de la sentencia sql
            echo "dato insertado correctamente";
            echo "<br>";
        }else{
            echo "error: ". mysqli_error($conexion);
            echo "<br>";
        }

    ?>
</body>
</html>
