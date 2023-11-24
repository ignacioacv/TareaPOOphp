<?php
require "./clases/Productos.php";

class Laptop extends Productos{
    public $sistema_operativo;
    public $almacenamiento;
    public $tipo_pago;
    
    public function __construct($nombre, $precio, $marca, $sistema_operativo, $almacenamiento, $tipo_pago)
    {
        //heredamos la informacion del constructor padre
        parent::__construct($nombre, $precio, $marca);
        $this->sistema_operativo = $sistema_operativo;
        $this->almacenamiento = $almacenamiento; 
        $this->tipo_pago = $tipo_pago; 
        
    }

    public function descuento(){
        if($this->tipo_pago == "Contado"){
       $total_descuento = $this->precio_producto - ($this->precio_producto * 0.30);
       echo "Usted recibio un descuento del 20% por pago al contado de su Laptop, su total es de" . $total_descuento;
       }
    }

    public function detalle()
    {
        echo "Nombre:" . $this->nombre_producto;
        echo "Nombre:" . $this->precio_producto;
        echo "Nombre:" . $this->marca_producto;
        echo "Nombre:" . $this->sistema_operativo;
        echo "Nombre:" . $this->almacenamiento;
        echo "Nombre:" . $this->tipo_pago;
    }
}
?>