<?php
class Multiplicar extends Calculadora{
    
    
    function calcular($numero1, $numero2){
        if ($numero2 != 0) {
            return $numero1 / $numero2;
        } else {
            return "No se puede dividir por cero.";
        }
    }
}
?>