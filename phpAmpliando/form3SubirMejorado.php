<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        var_dump($_FILES);
        echo "<br>::::::::::::::::::<br>";

        //subida completa de un archivo en formulario
        //para poder validar el archivo antes de subirlo

        //Restricciones
        $directorioSubida = "subidas/";//hemos definido la carpeta donde se guardan archivos subidos
        $max_file_size = "512000";
        $extensionesValidas = array("jpg", "png", "gif");

        if (isset($_FILES['imagen'])){

            $errores = 0;
            $nombreArchivo = $_FILES['imagen']['name'];
            $fileSize = $_FILES['imagen']['size'];
            $directorioTemp = $_FILES['imagen']['tmp_name'];
            $tipoArchivo = $_FILES['imagen']['type'];
            $arrayArchivo = pathinfo($nombreArchivo);
            var_dump($arrayArchivo);
            $extension = $arrayArchivo['extension'];

            if(!in_array($extension, $extensionesValidas)){
                echo "Extension no valida";
                $errores = 1;
            }
            if($fileSize > $max_file_size){
                echo "La imagen excede el tamaño máximo";
                $errores = 1;
            }

            if($errores == 0){
                $nombreCompleto = $directorioSubida.$nombreArchivo;
                move_uploaded_file($directorioTemp, $nombreCompleto);

            }
        }

    ?>
</body>
</html>