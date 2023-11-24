<?php
/*BubbleSort => Es un algoritmo de ordenamiento que revisa elemento por elemento de un arreglo, en base una condicion va intercambiando los valores y repite el proceso.*/ 

function bubbleSort($array){
    for($i=0; $i < count($array); $i++){

        for($j=0; $j < count($array) - 1; $j++){
            if($array[$j] > $array[$j +1]){
                $variableTemp = $array[$j+1];
                $array[$j+1]= $array[$j];
                $array[$j]= $variableTemp;
            }
        }
    }
    print_r($array) ;

}
bubbleSort([8,9,6,5,2,3,4]);
?>