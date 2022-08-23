<?php 

// Retorno Void e acesso a Constantes

function returnAnything($x) :void {
    return;
}

class Car 
{
    const C_TYPE = "Tesla";
    private const C_TYPEX = "X";
    protected const C_TYPEY = "Y";
}

$x = new Car();
$x::C_TYPE;

echo returnAnything(111);