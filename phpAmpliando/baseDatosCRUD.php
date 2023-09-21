<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //OPERACIONES CRUD
        //create, Read, Update, Delete
    
    //conectarme a base de datos =>
        //mysqli_connet();
        /*
        necesario especificar=>
        *host=> localhost si es servidor local
        *usuario=> root por defecto en XAMP
        *password=> vacío por defecto en XAMP
        */
       
        //mysqli_query() => realizar consultas
       


        //definimos variables 
        $servidor = "localhost";
        $usuario = "root";
        $password = "";
        
        $conexion = mysqli_connect($servidor, $usuario, $password);

        //comprobamos si la conexion se ha realizado bien
        if(!$conexion){
            echo "Conexion ha fallado";
        }
        else{
            $sql = "CREATE DATABASE PruebaPHP";
                if(mysqli_query($conexion, $sql)){
                echo "base de datos creada";
                echo "<br>";
                }
                else{
                echo "Error". mysqli_error($conexion);//vemos el ultimo error generado sobre la bd
                }
            //creamos tablas
            mysqli_select_db($conexion, "PruebaPHP");//seleccionamos la base de datos

            $sql2 = "CREATE TABLE clientes(nombre VARCHAR(20))";
                if (mysqli_query($conexion, $sql2)){
                    echo "tabla creada";
                    echo "<br>";
                }
                else{
                    echo "Error". mysqli_error($conexion);
                }
        }

    ?>
</body>
</html>