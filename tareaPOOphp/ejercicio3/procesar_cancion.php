<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Canción</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-5">
        <h2>Información de la Canción</h2>
        <form action="procesar_cancion.php" method="post">
            <div class="form-group">
                <label for="titulo">Título:</label>
                <input type="text" class="form-control" id="titulo" name="titulo" required>
            </div>

            <div class="form-group">
                <label for="genero">Género:</label>
                <input type="text" class="form-control" id="genero" name="genero" required>
            </div>

            <div class="form-group">
                <label for="autor">Autor:</label>
                <input type="text" class="form-control" id="autor" name="autor">
            </div>

            <button type="submit" class="btn btn-primary">Guardar Canción</button>
        </form>
    </div>
    <?php
    require "./clases/Cancion.php";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["titulo"]) && isset($_POST["genero"])) {
        $titulo = $_POST["titulo"];
        $genero = $_POST["genero"];
        $autor = isset($_POST["autor"]) ? $_POST["autor"] : "";

        $cancion = new Cancion($titulo, $genero);

        $cancion->setAutor($autor);

        echo "<div class='container mt-4'>";
        echo "<h3>Información de la Canción:</h3>";
        $cancion->mostrarDatos();
        echo "</div>";
    } else {
        echo "Faltan datos en el formulario.";
    }
}
?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>