<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form  id="bdform5actualizar" method="get" action="Bd_actualizar.php">
        <p>
            <label for="nombreactualizar">Nombre actualizado: </label>
            <input type="text" name="nombreactualizar" id="nombreactualizar">
        </p>

    <?php
    // ACTUALIZAR SQL
    
    //definimos variables 
    $servidor = "localhost";
    $usuario = "root";
    $password = "";
    
    $conexion = mysqli_connect($servidor, $usuario, $password) or die("Error de conexion");
    //or die me muestra el error y me finaliza el script

    //seleccionamos la base de datos
    mysqli_select_db($conexion, "pruebaphp");

    //generamos la sentencia sql
    $consultar = "SELECT nombre FROM clientes";

   //ejecutamos la sentencia sql
   $registros = mysqli_query($conexion, $consultar);
  
   echo "<label for = 'seleccionar'> Elige nombre a modificar: </label>";
   echo "<select name = 'seleccionar' id ='seleccionar'>"; 
   while($consulta = mysqli_fetch_row($registros)){
        echo "<option value = '$consulta[0]'>". $consulta[0]."</option>";
   //recorremos la tabla para ir mostrando cada fila en el select
   //cada vez que encuentre la consulta va a generar una opcion en el desplegable
   }
   echo "</select>";
    ?>
    <p>
    <input type="submit" value="Actualizar">
    </p>
</form>

</body>
</html>