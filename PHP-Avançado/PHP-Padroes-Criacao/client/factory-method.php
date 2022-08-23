<?php

use NicollasDEV\FactoryMethod\Circle;
use NicollasDEV\FactoryMethod\ConcreteCreator;
use NicollasDEV\FactoryMethod\Triangle;

require __DIR__.'/../vendor/autoload.php';

class Client
{
    public function __construct()
    {
        $circle = (new ConcreteCreator)->factoryMethod(new Circle);
        echo $circle->getImage();
        echo PHP_EOL;

        $triangle = (new ConcreteCreator)->factoryMethod(new Triangle);
        echo $triangle->getImage();

    }
}

new Client;