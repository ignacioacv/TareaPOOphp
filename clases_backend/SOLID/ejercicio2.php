<?php
interface exportDocument{
    public function exportarPDF();
//     public function exportarJSON();
//     public function exportarText();
 }

interface exportJSON{
    public function exportarJSON();
}

interface exportText{
    public function exportarText();
}
 class BoletaPago implements exportDocument{
    public function exportarPDF()
    {
        return  "Su boleta de pago esta en PDF";
    }
 }
 //Se incumplio la segregacion de interfaces
?>