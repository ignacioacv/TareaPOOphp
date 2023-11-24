<?php
function impuestos ($tipodevehiculo){
    switch ($tipodevehiculo) {
        case "vp":
            return 0.75;
            break;
        
        case "autobus":
            return 1.50;
            break;

        case "microbus":
            return 1.25;
            break;

        case "mototaxi":
            return 0.50;
            break;
            
        case "moto":
            return 0.30;
            break;
        
        default: return 3;

    }

}
echo impuestos("otros"); 

?>