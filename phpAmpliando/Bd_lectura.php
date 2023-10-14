<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //LECTURA DE DATOS 
        /*
        recorrer la tabla con => mysqli_fetch_row()
        obtiene una fila de resultados y lo devuelve como array
        */


        //capturo del formulario el campo que quiero comprobar
        $minombre = $_GET["nombrebusca"];


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
         
         //recorremos la tabla para ir mostrando cada fila
        
         $encontrado = false;//de inicio presuponemos que el dato no se encuentra en la tabla

         while($lectura = mysqli_fetch_row($registros)){
            echo "Nombre: ". $lectura[0];//0 es la posicion del array, porque solo tengo un campo(nombre)
            echo "<br>";
            if ($lectura[0] == $minombre) {
                $encontrado = true;
            }
        }
        if($encontrado){
            echo $minombre. " ha sido encontrado en la base de datos";
        }else {
            echo $minombre. " no ha sido encontrado en la base de datos";
        }

        mysqli_close($conexion);//cerramos siempre la conexion para no saturar el sistema
        

    ?>
</body>
</html>