<?php
    function ventaInpresoras ($impresora,$formadepago){
        switch ($formadepago) {
            case "efectivo":
                return ($impresora * 70)* 0.90;
                break;

            case "credito":
                    return ($impresora * 70)* 0.95;
                    break; 
            
            case "vale":
                    return ($impresora * 70)* 0.85;
                    break;
            
            default: return "ingrese forma de pago";

        }

    }
    echo ventaInpresoras(9,"efectivo"); 

?>