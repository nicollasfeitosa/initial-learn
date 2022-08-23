<?php

// Declaração de Tipos Escalares

/*
    Como modelos de classes     PHP 5
    array                       PHP 5.1
    callable                    PHP 5.4
    bool                        PHP 7
    float                       PHP 7
    int                         PHP 7
    strings                     PHP 7
*/

class ClassA
{
    public function get(float $a){ // Scalar Types
        return $a;
    }
}

$e = new ClassA;
echo $e->get(1);