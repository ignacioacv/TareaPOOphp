<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Cabecera de Página</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-5">
        <h2>Configuración de Cabecera de Página</h2>
        <form action="procesar.php" method="post">
            <div class="form-group">
                <label for="titulo">Título:</label>
                <input type="text" class="form-control" id="titulo" name="titulo" required>
            </div>

            <div class="form-group">
                <label for="color">Color:</label>
                <input type="text" class="form-control" id="color" name="color" required>
            </div>

            <div class="form-group">
                <label for="fuente">Fuente:</label>
                <input type="text" class="form-control" id="fuente" name="fuente" required>
            </div>

            <div class="form-group">
                <label for="alineacion">Alineación del Título:</label>
                <select class="form-control" id="alineacion" name="alineacion">
                    <option value="izquierda">Izquierda</option>
                    <option value="centro">Centro</option>
                    <option value="derecha">Derecha</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Crear Cabecera de Página</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>