<?php
require "./clases/Productos.php";

class Camara extends Productos{
    public $resolucion_camara;
    public $tipoLente;
    public $cantidad;
    
    public function __construct($nombre, $precio, $marca, $resolucion, $lente_camara, $cantidad)
    {
        //heredamos la informacion del constructor padre
        parent::__construct($nombre, $precio, $marca);
        $this->resolucion_camara = $resolucion;
        $this->tipoLente = $lente_camara; 
        $this->cantidad = $cantidad; 
        
    }

    public function descuento(){
        if($this->cantidad >= 2){
       $total_descuento = $this->precio_producto - ($this->precio_producto * 0.30);
       echo "Usted recibio un descuento del 30% por la compra de 2 o mas camaras, su total es de" . $total_descuento;
       }
    }

    public function detalle(){
        echo "Nombre:" . $this->nombre_producto;
        echo "Nombre:" . $this->precio_producto;
        echo "Nombre:" . $this->marca_producto;
        echo "Nombre:" . $this->resolucion_camara;
        echo "Nombre:" . $this->tipoLente;
        echo "Nombre:" . $this->cantidad;

    }
}
?>