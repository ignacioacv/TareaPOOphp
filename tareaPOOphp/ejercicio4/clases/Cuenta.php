<?php
class Cuenta {
    private $nombre;
    private $cantidad;
    private $tipoCuenta;
    private $numeroCuenta;

    public function __construct($nombre, $cantidad, $tipoCuenta, $numeroCuenta) {
        $this->nombre = $nombre;
        $this->cantidad = $cantidad;
        $this->tipoCuenta = $tipoCuenta;
        $this->numeroCuenta = $numeroCuenta;
    }

    public function depositar($cantidad) {
        if ($cantidad < 5.00) {
            echo "El valor a depositar debe ser mayor a $5.00.";
        } else {
            $this->cantidad += $cantidad;
            echo "¡Depósito exitoso! Cantidad depositada: $cantidad";
        }
    }

    public function retirar($valor) {
        if ($this->cantidad < 5.00) {
            echo "No hay suficiente efectivo en la cuenta.";
        } elseif ($valor < 5.00) {
            echo "El valor a retirar debe ser mayor a $5.00.";
        } else {
            $this->cantidad -= $valor;
            echo "Retiro exitoso <br> Retiraste: $valor <br> Saldo restante: {$this->cantidad}";
        }
    }

    public function mostrarDatos() {
        echo "Nombre: {$this->nombre}<br>";
        echo "Tipo de cuenta: {$this->tipoCuenta}<br>";
        echo "Número de cuenta: {$this->numeroCuenta}<br>";
    }
}
?>