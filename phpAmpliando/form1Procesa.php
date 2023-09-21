<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //ACCESO A DATOS DEL FORMULARIO
        /*los datos se almacenan en un array asociativo
        *depende del metodo de envio de los datos del formulario que definamos en html
        *$_GET
            *limite datos a enviar
            *los datos se mandan insertado en la URL
            *eficiente y cacheable
        *$_POST
            *me permite mandar ficheros
            *más seguro
        */

        //determinar que una variable esta vacia=> empty()
        //determinar si una variable esta definida=> isset()


        if(isset($_POST['usuario'])){
            if (!empty($_POST['usuario'])){
                $usuario = $_POST['usuario'];
                echo $usuario;
                echo "<br>";
            }
        }

        if(isset($_POST['clave'])){
            if (!empty($_POST['clave'])){
                $clave = $_POST['clave'];
                echo $clave;
                echo "<br>";
            }
        }


    ?>
</body>
</html>