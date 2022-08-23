<?php

// Único arquivo para uma unica classe
// Boa pratica nome de classes nunca devem ser no plural sempre no singular

require_once "Car.php";
require_once "Motorcycle.php";

$tesla = new Car('Tesla', 'White');
// $tesla->brand = 'Tesla';
// $tesla->color = 'White';
// $tesla->doors = 4;
$tesla->engine = 300;
$tesla->setDoors(4);

echo $tesla->getDoors();

//echo $tesla->getEngine(); // Chama o Método 

var_dump($tesla);

//=====================================================

$model3S = new Car('Tesla', 'Red');
// $model3S->brand = 'Tesla';
// $model3S->color = 'Red';
$model3S->engine = 500;
// $model3S->doors = 2;
$model3S->setDoors(2);


var_dump($model3S); 

echo $model3S->getEngine(); // Chama o Método 

//=====================================================

$Moto = new Motorcycle("Tesla Motors", "White");

// $Moto->brand = "Tesla Motors";
// $Moto->color = "White";
$Moto->engine = 150;

var_dump($Moto);
