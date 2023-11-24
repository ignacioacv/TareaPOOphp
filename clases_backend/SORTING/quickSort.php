<?php
function quickSort($arr){
    if(count($arr)>1){
    $pivote = $arr[0];
    $derecha = [];
    $izquierda = [];

    for($i=1; $i<count($arr); $i++){
        if($arr[$i] < $pivote){
            array_push($izquierda, $arr[$i]);
        }else{array_push($derecha, $arr[$i]); 
        }
    }
    return array_merge(quickSort($izquierda), array($pivote), quickSort($derecha));
    }else{
        return $arr;
    }
}

print_r(quickSort([5,10,7,2,9]));



?>