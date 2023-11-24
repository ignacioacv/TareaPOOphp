<?php
require "./Figura.php";

class Circulo extends Figura{

    public $radio;

    public function calcularArea()
    {
        $area = pi() * $this->radio**2;
        return "El area del circulo es: " . "" . number_format($area, 2);
    }

}
$evaluar = new Circulo;
$evaluar->radio =5;
echo $evaluar-> calcularArea();

?>