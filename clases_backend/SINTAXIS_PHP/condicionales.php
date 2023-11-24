<?php 

function terminarNuMERO ($numero){
    if($numero % 10 === 4){
        echo "El numero termina en 4";
    }else{
        echo "el numero NO TERMINA en 4";
    }
    
}
terminarNumero(1043);

// rango de salarios = vendedor, administrador o cajero

function rangoSalario($salario){
    if($salario >= 350 && $salario <= 500){
        echo "Usted es vendedor";
    }else if($salario >= 501 && $salario <= 690){
        echo "Usted es cajero";
    }else if($salario >= 691){
        echo "Usted es administrador";
    }else{
        echo "Usted es conserge";
    }
}

//switch estaciones

function calcularEstaciones($estaciones){
    switch($estaciones){
        case "invierno":
            $estaciones = "invierno";
            break;
        case "verano":
            $estaciones = "verano";
            break;
        case "fall":
            $estaciones = "fall";
            break;
        case "primavera":
            $estaciones = "primavera";
            break;
            
            default:$estaciones = "ingrese una estacion";
            
    }
    return $estaciones; 

}
echo calcularEstaciones("carro");


function operadorTernario ($arreglo){


    echo $arreglo[0] === 5 ? "La posicion 0 del arreglo empieza en 5" : "La posicion 0 NO INICIA en 5";

}
    

?>