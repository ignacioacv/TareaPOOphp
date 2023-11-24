<?php




$resultado = 0;
for($i=0; $i < count($arreglo); $i++){
    $resultado = $arreglo[$i] * 2;
    //echo $resultado . "<br>"; podemos concatenar con un punto (.)
    echo "Resultado: $resultado <br>"; //concatenamos dentro de comillas dobles
    //echo 'Resultado: $resultado <br>';
}


$contador = 10;
while($contador<=20){
    echo $contador . " ";
    $contador++;
}


//evaluar una cadena 
$cadena = "murcielago";
$k = 0;
$total_vocales = 0;
while($k < strlen($cadena)){
    if($cadena[$k] == "a" || $cadena[$k] == "e" || $cadena[$k] == "i" || $cadena[$k] == "o" || $cadena[$k] == "u"){
        $total_vocales++;
    }
    $k++;
}

echo "Tu cadena tiene $total_vocales vocales";

$arreglo2 = [45,6,7,89,12]; 
//calcular la media: suma / tamaño del arreglo
$m = 0;
$total = 0;
$media = 0;
do{
    $total += $arreglo2[$m];
    $m++;
}while($m < count($arreglo2));

$mediana = $total / count($arreglo2);
echo "<br>";
echo "La media del arreglo es $mediana";
?>