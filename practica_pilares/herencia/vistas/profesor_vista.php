<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <?php
        require "../Profesor.php";
    ?>
    <h1 class="text-center">Gestion de Profesores</h1>
    <div class="container">
        <form method="POST">
            <label for="" class="form-label">Nombre Completo</label>
            <input type="text" name="nombre" class="form-control" required>
            
            <label for="" class="form-label">Edad</label>
            <input type="text" name="edad" class="form-control" required>
            
            <label for="" class="form-label">Direccion</label>
            <input type="text" name="direccion" class="form-control" required>
            
            <label for="" class="form-label">Telefono</label>
            <input type="text" name="telefono" class="form-control" required>
            
            <label for="" class="form-label">Correo Electronico</label>
            <input type="text" name="correo" class="form-control" required>
            
            <label for="" class="form-label">Cual materia imparte?</label>
            <select name="materia" class="form-control">
                <option value="">--</option>
                <option value="Matematica">Matematica</option>
                <option value="Sociales">Sociales</option>
                <option value="Lenguaje">Lenguaje</option>
                <option value="Ciencia">Ciencia</option>
                <option value="Ingles">Ingles</option>
            </select>
            
            <label for="" class="form-label">Grado</label>
            <input type="text" name="grado" class="form-control" required>
            
            <label for="">Selecciona tu Horario</label>
            <select name="horario" class="form-control">
                <option value="">--</option>
                <option value="Tunro Matutino">Turno Matutino</option>
                <option value="Turno Vespertino">Turno Vespertino</option>
                <option value="Ambos Turnos">Ambos Turnos</option>
            </select>
            
            <label for="" class="form-label">Escuela</label>
            <input type="text" name="escuela" class="form-control" required>
            
            <label for="" class="form-label">Salario</label>
            <input type="text" name="salario" class="form-control" required>
            <input type="submit" class="btn btn-success mt-4" value="Gestionar Profesor">
        </form>
        <?php
            if (isset($_POST['nombre'],$_POST['edad'],$_POST['direccion'],$_POST['telefono'],$_POST['correo'],
            $_POST['materia'],$_POST['grado'],$_POST['horario'],$_POST['escuela'],$_POST['salario'],)){
                $nombre = $_POST['nombre'];
                $edad = $_POST['edad'];
                $direccion = $_POST['direccion'];
                $telefono = $_POST['telefono'];
                $correo = $_POST['correo'];
                $materia = $_POST['materia'];
                $grado = $_POST['grado'];
                $horario = $_POST['horario'];
                $escuela = $_POST['escuela'];
                $salario = $_POST['salario'];
                $profesor = new Profesor($nombre, $edad, $direccion, $telefono, $correo, $materia, $grado, $horario,
                $escuela, $salario);
                echo $profesor ->informacionGeneral();
                $profesor-> salarioExtra();
                echo $profesor ->informacionProfesor();
            }
        ?>
    </div>
</body>
</html>