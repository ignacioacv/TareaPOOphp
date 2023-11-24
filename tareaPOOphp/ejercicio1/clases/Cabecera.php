<?php
class CabeceraPagina {
    // Propiedades
    public $titulo;
    public $color;
    public $fuente;
    public $alineacionTitulo;

    // Constructor
    public function __construct($titulo, $color, $fuente) {
        $this->titulo = $titulo;
        $this->color = $color;
        $this->fuente = $fuente;
        $this->alineacionTitulo = 'izquierda'; // Valor por defecto
    }

    // Métodos
    public function setAlineacionTitulo($alineacion) {
        // Verificar que la alineación sea válida (izquierda, centro, derecha)
        if (in_array($alineacion, ['izquierda', 'centro', 'derecha'])) {
            $this->alineacionTitulo = $alineacion;
        } else {
            echo "Alineación no válida. Debe ser izquierda, centro o derecha.";
        }
    }

    public function imprimirPropiedades() {
        echo "Título: {$this->titulo}<br>";
        echo "Color: {$this->color}<br>";
        echo "Fuente: {$this->fuente}<br>";
        echo "Alineación del título: {$this->alineacionTitulo}<br>";
    }
}

// Crear una instancia de la clase CabeceraPagina
$cabecera = new CabeceraPagina("Mi Página", "azul", "Arial");

// Llamar al primer método
$cabecera->imprimirPropiedades();

// Llamar al segundo método
$cabecera->setAlineacionTitulo("centro");

// Llamar al tercer método
$cabecera->imprimirPropiedades();
?>