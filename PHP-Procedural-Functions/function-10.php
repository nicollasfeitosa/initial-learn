<?php

// Funções Anonimas

function soma($a, $b){

}

$soma = function (int $a, int $b) : int {
    return $a + $b;
};

$resultado = $soma(2, 2);

echo $resultado;


