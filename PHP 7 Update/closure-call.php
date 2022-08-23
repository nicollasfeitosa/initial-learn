<?php

// Closure Call

class ClassA
{
    private $x = 1;
}

// Metodo Antigo
$getABC = function() {
    return $this->x;
};

$getX = $getABC->bindTo(new ClassA, "ClassA");

echo $getX();

// Método novo
$getX2 = function(){
    return $this->x;
};

echo $getX2->call(new ClassA);