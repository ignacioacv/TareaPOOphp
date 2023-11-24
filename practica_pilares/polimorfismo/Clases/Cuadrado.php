<?php
require "./Figura.php";
class Cuadrado extends Figura {
    public $lado; 
    public function calcularArea()
    {
        $area = $this->lado ** 2;
        return "El area del cuadrado es" . $area;
    
} 
}
?>