<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <!--SUBIR FICHEROS AL SERVIDOR SIEMPRE CON POST-->

        <!--con action le decimos la pagina php donde van a ir los valores que se envian-->

        <!-- el metodo post no muestra los datos por url-->
        <form action= formulario2.php method=post enctype="multipart/form-data"><!--multipart... le dice al form que voy a subir fichero y lo recoge-->
            
            Introducir nombre: <input type="text" name="nombre"><br><br>
            Subir fichero: <input type="file" name="fichero"><!--crea caja de texto donde subir fichero-->
            <br><br>
            <input type="submit" name="enviar" value="Enviar">
        </form>

    </body>

</html>