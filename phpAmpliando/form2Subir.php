<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //recomendado comprobar en php.ini que esté activada la subida de archivos, directorio destino y tamaño máximo.
    //tengo que tener permisos tanto en el directorio temporal como en el destino para escribir
    
    //visualizar valor de una directiva de configuracion con => ini_get()

    #la informacion del archivo se va a guardar en un array asociativo => $_FILES

    //para comprobar si el archivo fue subido => is_uploaded_file()
    //para mover el archivo temporal a la ruta final => move_uploaded_file()

    var_dump($_FILES);
    echo "<br>";
    
    $directorio = ini_get("upload_tmp_dir");
    echo $directorio;

    $directorioTemp = $_FILES['imagen']['tmp_name'];
    move_uploaded_file($directorioTemp, $_FILES['imagen']['name']);
    

    ?>
</body>
</html>