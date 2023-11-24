<?php
class Calculator {
    public function calcular($operacion, $numero1, $numero2) {
        switch ($operacion) {
            case 'sumar':
                return $this->sumar($numero1, $numero2);
            case 'restar':
                return $this->restar($numero1, $numero2);
            case 'multiplicar':
                return $this->multiplicar($numero1, $numero2);
            case 'dividir':
                return $this->dividir($numero1, $numero2);
            case 'potencia':
                return $this->potencia($numero1, $numero2);
            case 'factorial':
                return $this->factorial($numero1);
            default:
                return "Operación no válida";
        }
    }

    public function sumar($numero1, $numero2) {
        return $numero1 + $numero2;
    }

    public function restar($numero1, $numero2) {
        return $numero1 - $numero2;
    }

    public function multiplicar($numero1, $numero2) {
        return $numero1 * $numero2;
    }

    public function dividir($numero1, $numero2) {
        if ($numero2 != 0) {
            return $numero1 / $numero2;
        } else {
            return "No se puede dividir por cero.";
        }
    }

    public function potencia($base, $exponente) {
        return pow($base, $exponente);
    }

    public function factorial($numero) {
        if ($numero < 0) {
            return "No se puede calcular el factorial de un número negativo.";
        } elseif ($numero == 0) {
            return 1;
        } else {
            return $numero * $this->factorial($numero - 1);
        }
    }
}
?>