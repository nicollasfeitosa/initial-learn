<?php

require_once "IVehicle.php";

abstract class Vehicle implements IVehicle{
    public $brand;
    protected $color; 
    public $engine; 

    public function __construct($brand = null, $color = null)
    {
        $this->brand = $brand;
        $this->color = $color;
    }

    public function getEngine($type = "horsepower")
    {
        //return $this->engine . " {$type}";
        return "{$this->engine} {$type}";
    }

    abstract public function getBrand(); // Obriga as demais classes a implementar esse método

    public function getColor(){
        return $this->color;
    }
}

/*
O paramento Type é uma assinatura quando não definido um valor padrão!

Construtor é o método que é chamado sempre que a classe é instanciada!

Uma classe abstrata é um molde e não pode ser instanciada!

*/