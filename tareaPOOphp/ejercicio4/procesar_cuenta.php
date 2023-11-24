<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Cuenta</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-5">
        <h2>Información de la Cuenta</h2>
        <form action="procesar_cuenta.php" method="post">
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>

            <div class="form-group">
                <label for="cantidad">Cantidad:</label>
                <input type="number" class="form-control" id="cantidad" name="cantidad" required>
            </div>

            <div class="form-group">
                <label for="tipoCuenta">Tipo de cuenta:</label>
                <input type="text" class="form-control" id="tipoCuenta" name="tipoCuenta" required>
            </div>

            <div class="form-group">
                <label for="numeroCuenta">Número de cuenta:</label>
                <input type="text" class="form-control" id="numeroCuenta" name="numeroCuenta" required>
            </div>

            <div class="form-group">
                <label for="operacion">Operación:</label>
                <select class="form-control" id="operacion" name="operacion">
                    <option value="depositar">Depositar</option>
                    <option value="retirar">Retirar</option>
                </select>
            </div>

            <div class="form-group">
                <label for="valor">Valor:</label>
                <input type="number" class="form-control" id="valor" name="valor" required>
            </div>

            <button type="submit" class="btn btn-primary">Realizar Operación</button>
        </form>
    </div>
    <?php
    require "./clases/Cuenta.php";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["nombre"]) && isset($_POST["cantidad"]) && isset($_POST["tipoCuenta"]) && isset($_POST["numeroCuenta"]) && isset($_POST["operacion"]) && isset($_POST["valor"])) {

        $nombre = $_POST["nombre"];
        $cantidad = $_POST["cantidad"];
        $tipoCuenta = $_POST["tipoCuenta"];
        $numeroCuenta = $_POST["numeroCuenta"];
        $operacion = $_POST["operacion"];
        $valor = $_POST["valor"];

        $cuenta = new Cuenta($nombre, $cantidad, $tipoCuenta, $numeroCuenta);

        if ($operacion == "depositar") {
            $cuenta->depositar($valor);
        } elseif ($operacion == "retirar") {
            $cuenta->retirar($valor);
        }

        echo "<div class='container mt-4'>";
        echo "<h3>Información de la Cuenta:</h3>";
        $cuenta->mostrarDatos();
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