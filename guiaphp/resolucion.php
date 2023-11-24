<?php
//Ejercicio 1
function aumentoSalario($nombre, $salario, $categoria) {
$aumento = 0;
$nuevoSalario = 0;
switch($categoria){
    case "A":
        $aumento = $salario * 0.15;
        $nuevoSalario = $salario + $aumento;
        echo "$nombre tu nuevo salario es de <br>" . $nuevoSalario . "<br>";
        break;
    case "B":
        $aumento = $salario * 0.30;
        $nuevoSalario = $salario + $aumento;
        echo "$nombre tu nuevo salario es de <br>" . $nuevoSalario. "<br>";
        break;
    case "C":
        $aumento = $salario * 0.10;
        $nuevoSalario = $salario + $aumento;
        echo "$nombre tu nuevo salario es de <br>" . $nuevoSalario. "<br>";
        break;
    case "D":
        $aumento = $salario * 0.20;
        $nuevoSalario = $salario + $aumento;
        echo "$nombre tu nuevo salario es de <br>" . $nuevoSalario. "<br>";
        break;
    default:
        echo "Ingrese una categoria valida<br>";
        break;
    
}
}
aumentoSalario("Ismar Reyes", 360, "F");

//Ejercicio 2

function arregloPhp(){
    $arreglo = [100, 34, -3, 7, -12, 15, 60, 45, 75, -4, 89];
    $Can_Negativas = 0;
    $Can_Positivos = 0;
    $Can_Multiplos_15 = 0;
    for($i = 0; $i < count($arreglo); $i++ ){
        if($arreglo[$i] < 0){
            $Can_Negativas++;
        }else if($arreglo[$i] > 0){
            $Can_Positivos++;
            if($arreglo[$i] % 15 === 0){
                $Can_Multiplos_15++;
            }
        }else{
            echo "Este numero entra en otra categoria";
        }
    }
    echo "Cantidad de numeros negativos es: $Can_Negativas <br>";
    echo "Cantidad de numeros positivos es: $Can_Positivos <br>";
    echo "Cantidad de numeros multiplos de 15 es: $Can_Multiplos_15 <br>";
}
arregloPhp();

//Ejercicio 3

function tablaMultiplicacion($numero){
    for($i = 1; $i <= 10; $i++ ){
        $resultado = $numero * $i;         
        echo "$numero x $i = $resultado<br>";
    }
}
tablaMultiplicacion(-1); 

//Ejercicio 4
function descuentoVenta($impresoras, $formaDePago) {
    // $precioImpresora = 70;
    define("precioImpresora", 70);
    $totalAPagar = 0;
    $descuento = 0;
    switch($formaDePago){
        case "Efectivo":
            $descuento =  ($impresoras * precioImpresora) * 0.10;
            $totalAPagar = ($impresoras * precioImpresora) - $descuento;
            echo "Se adquirieron $impresoras, con un descuento de $descuento, con precio total de $totalAPagar";
            break;
        case "Tarjeta de credito":
            $descuento =  ($impresoras * precioImpresora) * 0.05;
            $totalAPagar = ($impresoras * precioImpresora) - $descuento;
            echo "Se adquirieron $impresoras, con un descuento de $descuento, con precio total de $totalAPagar";
            break;
        case "Vale":
            $descuento =  ($impresoras * precioImpresora) * 0.15;
            $totalAPagar = ($impresoras * precioImpresora) - $descuento;
            echo "Se adquirieron $impresoras, con un descuento de $descuento, con precio total de $totalAPagar <br>";
            break;
        default:
            echo "Forma de pago no valida <br>";
            break;
        
    }
}

descuentoVenta(50, "deposito");

//Ejercicio 5

function estudiantesFsj15(){
    $alumnos = array(
        array(
            "Estudiante" => "Katherine Argelia Chacon",
            "Carnet" => "KA2023",
            "Bootcamp" => "FullStack Jr 18",
            "Coach" => "Oscar Lemus"
        ),
        array(
            "Estudiante" => "Diego Alexander Pineda",
            "Carnet" => "DA2023",
            "Bootcamp" => "FullStack Jr 18",
            "Coach" => "Oscar Lemus"
        ),
        array(
            "Estudiante" => "Elena Alexandra Sandoval",
            "Carnet" => "EA2023",
            "Bootcamp" => "FullStack Jr 15",
            "Coach" => "Jairo Vega"
        ),
        array(
            "Estudiante" => "Rodrigo Hernandez",
            "Carnet" => "RH2023",
            "Bootcamp" => "FullStack Jr 15",
            "Coach" => "Jairo Vega"
        ),
        array(
            "Estudiante" => "Bryan Ariel Flores",
            "Carnet" => "BA2023",
            "Bootcamp" => "FullStack Jr 18",
            "Coach" => "Oscar Lemus"
        ),
        array(
            "Estudiante" => "Irene Chavez",
            "Carnet" => "IC2023",
            "Bootcamp" => "Java Developer",
            "Coach" => "Eduardo Calles"
        )
        );


    for($i = 0; $i < count($alumnos); $i++){
        if($alumnos[$i]["Bootcamp"] === "FullStack Jr 15"){
        echo "Nombre del estudiante:". $alumnos[$i]['Estudiante']."<br>";
        echo "Carnet del estudiante:". $alumnos[$i]['Carnet']. "<br>";
        echo "Bootcamp del estudiante:" . $alumnos[$i]['Bootcamp'] . "<br>";
        echo "Coach del estudiante:" . $alumnos[$i]['Coach']."<br>";
        }
    }
}
estudiantesFsj15();

function estudiantesCoachOscar(){
    $alumnos = array(
        array(
            "Estudiante" => "Katherine Argelia Chacon",
            "Carnet" => "KA2023",
            "Bootcamp" => "FullStack Jr 18",
            "Coach" => "Oscar Lemus"
        ),
        array(
            "Estudiante" => "Diego Alexander Pineda",
            "Carnet" => "DA2023",
            "Bootcamp" => "FullStack Jr 18",
            "Coach" => "Oscar Lemus"
        ),
        array(
            "Estudiante" => "Elena Alexandra Sandoval",
            "Carnet" => "EA2023",
            "Bootcamp" => "FullStack Jr 15",
            "Coach" => "Jairo Vega"
        ),
        array(
            "Estudiante" => "Rodrigo Hernandez",
            "Carnet" => "RH2023",
            "Bootcamp" => "FullStack Jr 15",
            "Coach" => "Jairo Vega"
        ),
        array(
            "Estudiante" => "Bryan Ariel Flores",
            "Carnet" => "BA2023",
            "Bootcamp" => "FullStack Jr 18",
            "Coach" => "Oscar Lemus"
        ),
        array(
            "Estudiante" => "Irene Chavez",
            "Carnet" => "IC2023",
            "Bootcamp" => "Java Developer",
            "Coach" => "Eduardo Calles"
        )
        );

    foreach ($alumnos as $item){
        if($item["Coach"] === "Oscar Lemus"){
        echo "Nombre del estudiante:". $item['Estudiante']."<br>";
        // echo "Carnet del estudiante:". $item['Carnet']. "<br>";
        // echo "Bootcamp del estudiante:" . $item['Bootcamp'] . "<br>";
        // echo "Coach del estudiante:" . $item['Coach']."<br>";
        }
    }
}
estudiantesCoachOscar();

?>