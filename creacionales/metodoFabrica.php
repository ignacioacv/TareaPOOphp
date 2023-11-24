<?php
interface Transporte{
    public function envio();
}

class Camion implements Transporte{
    public function envio(){
        return "El envio ya esta listo y se hara por via Camion";
    }
}
class Barco implements Transporte{
    public function envio(){
        return "El envio ya esta listo y se hara por via Camion";
    }
}
class Avion implements Transporte{
    public function envio(){
        return "El envio ya esta listo y se hara por via Camion";
    }
}

abstract class Mensajeria{
    abstract function obtenerTransporte() : Transporte;
    public function imprimirEnvio(){
        $transporte = $this -> obtenerTransporte();
        return $transporte -> envio();
    }
}

class MensajeriaTerrestre extends Mensajeria{
    public function obtenerTransporte(): Transporte
    {
        return new Camion;
    }
}
class MensajeriaMaritima extends Mensajeria{
    public function obtenerTransporte(): Transporte
    {
        return new Barco;
    }
}
class MensajeriaAerea extends Mensajeria{
    public function obtenerTransporte(): Transporte
    {
        return new Avion;
    }
}

function obtenerMensajeria(Mensajeria $mensajeria ){
    return $mensajeria->imprimirEnvio();
}

echo obtenerMensajeria(new MensajeriaMaritima);
echo obtenerMensajeria(new MensajeriaAerea);
?>