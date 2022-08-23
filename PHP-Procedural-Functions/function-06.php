<?php

// Return Type Declarations

function temNumero( int $aleatorio, array $numeros ) : ?int {  // ? = aceita valor nulo ou inteiro

    if (in_array($aleatorio, $numeros)) {
        return $aleatorio;
    } else {
        return null;
    }

}

$numeros = [1, 3, 4, 5, 6, 9];
$aleatorio = mt_rand(1, 10);

echo "$aleatorio <br/>";

$resultado = temNumero($aleatorio, $numeros);

var_dump($resultado);