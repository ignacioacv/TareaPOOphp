<?php
abstract class Calculadora{
    public $numero1;
    public $numero2;
    // public $operacion;

    public function __construct($numero1, $operacion, $numero2)
    {
        $this->numero1 = $numero1;
        // $this->operacion = $operacion;
        $this->numero2 = $numero2;
    }

    abstract function calcular($numero1, $numero2);
}
?>