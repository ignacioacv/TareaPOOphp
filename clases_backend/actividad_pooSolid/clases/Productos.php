<?php
abstract class Productos{
public $nombre_producto;
public $precio_producto;
public $marca_producto;

public function __construct($nombre_producto, $precio_producto, $marca_producto)
   {
       $this->nombre_producto = $nombre_producto;
       $this->precio_producto = $precio_producto;
       $this->marca_producto = $marca_producto;
   }

abstract function descuento();
abstract function detalle();
}
?>