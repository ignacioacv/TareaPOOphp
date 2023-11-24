<?php
interface Personaje{
    public function golpear();
    public function vida();
}

class Zelda implements Personaje{
    public function golpear()
    {
        return "Zelda da un corbazo";
    }

    public function vida()
    {
        return "zelda tiene 5 corazones";
    }
}

class Batman implements Personaje{
    public function golpear()
    {
        return "Batman da un batigolpe";
    }

    public function vida()
    {
        return "batman tiene 10 corazones";
    }
}

class Skywalker implements Personaje{
    public function golpear()
    {
        return "Skywalker da un corbazo azul";
    }

    public function vida()
    {
        return "skywalker tiene 20 corazones";
    }
}

abstract class NivelesJuego{
    abstract function obtenerPersonajes() : Personaje;

    public function imprimirPersonajes(){
        $personajes = $this->obtenerPersonajes();
    }
}
?>