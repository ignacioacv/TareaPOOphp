<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Calculadora</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body>
    <div class="container mt-5">
        <h2 class="mb-4">Calculadora</h2>
        <form action="procesar_calculadora.php" method="post">
            <div class="form-group">
                <label for="numero1">Número 1:</label>
                <input type="number" class="form-control" id="numero1" name="numero1" required />
            </div>

            <div class="form-group">
                <label for="numero2">Número 2:</label>
                <input type="number" class="form-control" id="numero2" name="numero2" required />
            </div>

            <div class="btn-group" role="group">
                <button type="submit" class="btn btn-primary" name="operacion" value="sumar">
                    Sumar
                </button>
                <button type="submit" class="btn btn-primary" name="operacion" value="restar">
                    Restar
                </button>
                <button type="submit" class="btn btn-primary" name="operacion" value="multiplicar">
                    Multiplicar
                </button>
                <button type="submit" class="btn btn-primary" name="operacion" value="dividir">
                    Dividir
                </button>
                <button type="submit" class="btn btn-primary" name="operacion" value="potencia">
                    Potencia
                </button>
                <button type="submit" class="btn btn-primary" name="operacion" value="factorial">
                    Factorial
                </button>
            </div>
        </form>
    </div>

    <?php
     // Incluye la clase Calculadora
    require './clasesPOO/Calculator.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica que los campos necesarios estén presentes
    if (isset($_POST["numero1"]) && isset($_POST["numero2"]) && isset($_POST["operacion"])) {

        // Obtiene los valores del formulario
        $numero1 = $_POST["numero1"];
        $numero2 = $_POST["numero2"];
        $operacion = $_POST["operacion"];

        // Crea una instancia de la clase Calculadora
        $calculadora = new Calculator();

        // Realiza la operación correspondiente
        $resultado = $calculadora->calcular($operacion, $numero1, $numero2);

        // Muestra el resultado
        echo "<div class='container mt-4'>";
        echo "<h3>Resultado de la operación:</h3>";
        echo "<p>{$numero1} {$operacion} {$numero2} = {$resultado}</p>";
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