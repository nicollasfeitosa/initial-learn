<?php

// Modo Strict Types
declare(strict_types=1); // Ativa o modo rígido

/*
    É o modo que espera (força/obriga) a declaração do tipo da variável
    Sem o modo Strict Type o modo corretivo é o deafult
    No modo corretivo uma string com um numero inteiro é realizado o parse para inteiro
    internamente no PHP ou seja nesse modo o PHP trata os dados.
*/

function funcA(int $x){
    return $x;
}

echo funcA(1);