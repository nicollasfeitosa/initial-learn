<?php

require_once "Vehicle.php";

class Motorcycle extends Vehicle 
{
    public function __construct($brand = null, $color = null)
    {
        parent::__construct($brand, strtoupper($color));

        echo $this->color;
    }

    public function getBrand(){
        return $this->brand;
    }
}

/*

Construtor é o método que é chamado sempre que a classe é instanciada!

*/