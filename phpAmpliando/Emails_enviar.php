<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        //configuracion previa
        /*archivo php.ini =>
            *SMTP = localhost
            *smtp_port = 25
            *sendmail_from = mi_email@mi_dominio.com
        
        *en tiempo de ejecucion =>
            *ini_set()
        */

        //enviar un correo electronico =>
            //mail();

        $to = "mbcrue@gmail.com";

        $subject = "email de confirmacion desde php";

        $message = "Hola, te ha llegado el mail configurado en php";

        $from = "administradora@dominio.com";

        $headers = "From: $from";

        mail($to, $subject, $message, $headers);

        echo "mail enviado";

        //para probar esta practica hay que hacerlo en un hosting real
        // hosting gratuito => 000Webhost
        
    ?>
</body>
</html>