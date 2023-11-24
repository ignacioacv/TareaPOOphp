<?php
class Cancion {
    
    public $titulo;
    public $genero;
    public $autor;

    public function __construct($titulo, $genero) {
        $this->titulo = $titulo;
        $this->genero = $genero;
        $this->autor = ""; 
    }

    public function getAutor() {
        return $this->autor;
    }

    public function setAutor($autor) {
        $this->autor = $autor;
    }

    public function mostrarDatos() {
        echo "Título: {$this->titulo}<br>";
        echo "Género: {$this->genero}<br>";
        echo "Autor: {$this->autor}<br>";
    }
}
?>