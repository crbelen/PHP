<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //BORRADO SQL
    
    
    $encontrado = false;
    //capturo del formulario el campo que quiero comprobar
    $minombre = $_GET["nombreborrar"];

     //definimos variables 
     $servidor = "localhost";
     $usuario = "root";
     $password = "";
     
     $conexion = mysqli_connect($servidor, $usuario, $password) or die("Error de conexion");
     //or die me muestra el error y me finaliza el script

     //seleccionamos la base de datos
     mysqli_select_db($conexion, "pruebaphp");

    //BUSCAMOS EL DATO ANTES DE ELIMINARLO
    
        //generamos la sentencia sql
        $consultar = "SELECT nombre FROM clientes";

        //ejecutamos la sentencia sql
        $registros = mysqli_query($conexion, $consultar);
        
        //recorremos la tabla para ir mostrando cada fila
        while($lectura = mysqli_fetch_row($registros)){
            echo "Nombre: ". $lectura[0];//0 es la posicion del array, porque solo tengo un campo(nombre)
            echo "<br>";
            if ($lectura[0] == $minombre) {
                $encontrado = true;
            }
        }

    //AHORA ELIMINAMOS EL REGISTRO
    if($encontrado){
        $sql = "DELETE FROM clientes WHERE nombre = '$minombre'";
        mysqli_query($conexion, $sql);

        echo $minombre. " ha sido eliminado en la base de datos";
    }else {
        echo $minombre. " no ha sido eliminado en la base de datos";
    }
    
    mysqli_close($conexion);//cerramos siempre la conexion para no saturar el sistema



    ?>
</body>
</html>