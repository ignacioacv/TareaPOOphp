<?php
interface mayorEdad{
    public function pago();
}
class Adulto implements mayorEdad{
   public function pago(){
       echo "Es mayor de edad puede pagar";
   }
}
class Niño{
//    public function pago()
//    {
//         throw new Exception("el niño no puede pagar");
//    }
}
//Se incumplia principio de sustitucion de liskov
?>