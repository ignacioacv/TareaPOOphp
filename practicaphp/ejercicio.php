<?php
function capturarEntero ($valor){
$numeroentero = $valor; 
if ($numeroentero > 0) {
    echo "positivo";
    

} else if ($numeroentero < 0){
    echo "negativo";

} else {
    echo "cero";
}
}
echo capturarEntero(-2);
?>