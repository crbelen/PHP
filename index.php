<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <!--con action le decimos la pagina php donde van a ir los valores que se envian-->
        <!-- el metodo get es el que muestra los datos por la url-->
       <form action= formulario.php method=get>
            Introducir nombre: <input type="text" name="nombre">
            <input type="submit" name="enviar" value="Enviar">
        </form>

        <!-- el metodo post no muestra los datos por url-->
        <form action= formulario.php method=post>
            Introducir nombre: <input type="text" name="nombre">
            <input type="submit" name="enviar" value="Enviar">
        </form>

    </body>

</html>
