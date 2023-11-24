<?php
require "./clases/Productos.php";

class Celulares extends Productos{
    public $modelo;
    public $color;
    public $medidas;
    
    public function __construct($nombre, $precio, $marca, $modelo, $color, $medidas)
    {
        //heredamos la informacion del constructor padre
        parent::__construct($nombre, $precio, $marca);
        $this->modelo = $modelo;
        $this->color = $color;
        $this->medidas = $medidas; 
    }

    public function descuento(){
       $total_descuento = $this->precio_producto - ($this->precio_producto * 0.10);
       echo "Toda compra de celulares recibe un descuento del 10%, su total es de" . $total_descuento;
       
    }

    public function detalle(){
        echo "Nombre:" . $this->nombre_producto;
        echo "Nombre:" . $this->precio_producto;
        echo "Nombre:" . $this->marca_producto;
        echo "Nombre:" . $this->modelo;
        echo "Nombre:" . $this->color;
        echo "Nombre:" . $this->medidas;
    }
}
?>