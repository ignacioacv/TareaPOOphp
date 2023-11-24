<?php
function paresInpares ($numeros){
    $pares=0;
    $inpares=0;
    for ($i = 0;$i< count($numeros);$i++){
        
        if (($numeros[$i]%2 == 0)) {
            $pares += $numeros [$i];
        } else {
            $inpares += $numeros [$i];
        }
    }
    echo $pares;
    echo "<br>";
    echo $inpares;

}
paresInpares ([2,3,5,6,9]);
?>