<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        //funciones sobre clases

        //CREO UNA CLASE Y SUS METODOS
        class Alumno{
            private $nombre = null;
            private $apellidos = null;

    
           //constructor con parametros
             public function __construct($nombre = null, $apellidos = null){

                $this->nombre = $nombre;
                $this->apellidos = $apellidos;
            }
    
            function getNombre(){
                return $this->nombre;
            }

            function getApellido(){
                return $this->apellidos;
            }

            function setNombre($nombre=null){
                $this->nombre = $nombre;
            }
            function setApellido($apellidos=null){
                $this->apellidos = $apellidos;
            }

            function calcularLetras ($nombre){
                return strlen($this->nombre);
            }

        }

        //INSTANCIO LA CLASE
        $alumno1 = new Alumno("Belen", "Conde R");
        
        $nombreAlumno1 = $alumno1->getNombre();
        echo $nombreAlumno1;
        echo "<br>";

        $alumno2 = new Alumno();
        $alumno2->setNombre("Maria");
        $alumno2->setApellido("lopez");

        $nombreAlumno2 = $alumno2 -> getNombre();
        $apellidoAlumno2 = $alumno2->getApellido();

        echo $nombreAlumno2." ". $apellidoAlumno2. "<br>";

        $letras = $alumno1->calcularLetras($nombreAlumno1);
        echo $letras. "<br>";

        //para comprobar si la clase existe
        if(class_exists("Alumno")){
            echo "Clase: ". get_class($alumno1);
            echo"<br>";
        }

        //para obtener metodos y propiedades
        $metodosAlumno = get_class_methods("Alumno");
        var_dump($metodosAlumno);
        echo "<br>";

        $propiedadesAlumno = get_class_vars("Alumno");
        var_dump($propiedadesAlumno);//no me va a devolver nada porque las propiedades son privadas
        



      




    ?>
</body>
</html>