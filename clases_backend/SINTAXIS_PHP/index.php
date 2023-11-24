<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Empezando el backend</h1>

    <?php
    $variable1 = "Hola mundo";

    echo $variable1;


    class Estudiante{
            public $nombre;
            public $apellido;
        }

        $estudiante1 = new Estudiante();
        $estudiante1->nombre = "kenia";
        $estudiante1->apellido = "paiz";
        echo "<br>";
        print_r($estudiante1);

        
    ?>
</body>
</html>