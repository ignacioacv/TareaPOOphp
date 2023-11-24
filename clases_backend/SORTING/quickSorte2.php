<?php

function quickSort2($arreglo){
    if(count($arreglo)>1){
        $pivote = end($arreglo);
        $izquierda = array();
        $derecha = array();

        for($i = count($arreglo)-2; $i>=0; $i--){
            if($arreglo[$i] < $pivote){
                array_push($izquierda, $arreglo[$i]);
            }else{array_push($derecha, $arreglo[$i]); 
            }
        }
        return array_merge(quickSort2($izquierda), array($pivote), quickSort2($derecha));
    }else{
        return $arreglo;
    }
}
print_r(quickSort2([5,7,-4,11,3]));
?>