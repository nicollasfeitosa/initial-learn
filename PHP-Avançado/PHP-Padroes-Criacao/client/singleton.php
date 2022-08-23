<?php

require __DIR__.'/../vendor/autoload.php';

use NicollasDEV\Singleton\Singleton;

$concreteClass = Singleton::getInstance();
var_dump($concreteClass->getCounter());
var_dump($concreteClass->getCounter());

//==================================================

$outra_concreteClass = Singleton::getInstance();
var_dump($outra_concreteClass->getCounter());

var_dump($concreteClass);
var_dump($outra_concreteClass);
