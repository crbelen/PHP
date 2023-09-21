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

        session_start();//reanudamos la sesion

        //las sesiones propagan las variables de una pagina a otra

        if(isset($_SESSION["iniciada"]) == true){
            echo "Identificador de la sesion: ". session_id();
            echo "<br>";
            echo "Nombre de la sesion: ". session_name();
            echo "<br>";
    
            echo "Nombre: ". $_SESSION["nombre"];
            echo "<br>";
            echo "Edad:  ". $_SESSION["edad"];
            echo "<br>";
        }else{
            echo "no se ha definido la sesion <br>";
        }

        //ponemos dos links

        echo "<a href= 'sesionesVariasPaginas.php'> Volver a la web principal </a>";


    ?>
</body>
</html>