<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        /*SESIONES => caracteres aleatorios que forman una identificacion unica para cada usuario
        *  se almacenan en el servidor
        *  tiene la ventaja de que paginas distintas pueden acceder a variables comunes
        */
        // las sesiones son una forma de guardar datos y que sea persistente a toda la App y así poder ir moviendo datos entre scrips y paginas diferentes

        
        //INICIAR UNA SESION
            /*
            *Iniciar o reanudar una sesion asignando un ID único con session_start()
            * session_start() se coloca al principio del archivo

            *obtener o asignar un ID con session_id()
            * session_id() debe ir antes del inicio de la sesion.


            *obtener o asignar un nombre a la sesion con session_name()
            * si no se indica nombre se usa por defecto PHPSESSID (definido por php.ini)
            */

            session_id("22");//asignamos ID

            echo session_name();//mostramos nombre sesion por defecto
            echo "<br>";

            session_start();//iniciamos sesion

        //DEFINIR VARIABLES DE SESION
            /*
            *definir variables con un array asociativo $_SESSION

            *destruir una variable especifica con unset()
            */

            $_SESSION["iniciada"] = true;
            $_SESSION["nombre"] = "Belen";

            var_dump($_SESSION);
            echo "<br>";

        //CIERRE DE SESION
            /* 
            * destruir la informacion de una sesion con session_destroy()
            
            * no elimina ni variables globales ni cookies de sesion
            * las sesiones finalizan al cerrar el navegador

            *para LIBERAR las variables de una sesion con session_unset()
            */

            unset($_SESSION["nombre"]);

            //ahora compruebo si existe o no
            if(isset($_SESSION["nombre"]) == false){
                echo "la variable de sesion nombre no existe";
            }
            
            session_destroy();


        
        

    ?>
</body>
</html>