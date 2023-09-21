<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //objetos y clases

        class PrimeraClase{
            public $nombre = "Belen";

            public  function mostrarNombre(){
                echo  $this->nombre;
            }
        }
        
        //ahora instanciamos la clase creada

        $instancia = new PrimeraClase();

        echo $instancia-> nombre;//mostramos el nombre accediendo a la propiedad nombre
        $instancia-> mostrarNombre()//mostramos nombre accediendo a la funcion

    ?>
    
</body>
</html>