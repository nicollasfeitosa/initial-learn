<?php

// Operador Spaceship

/*
   X <=> Y
   Se for igual retorna 0
   Esquerda menor que direita retorna -1
   Direita menor que a esquerda retorna 1
*/

// Numeros Inteiros
echo 3 <=> 3; // 0
echo 2 <=> 3; // -1
echo 3 <=> 2; // 1

// Float
echo 3.5 <=> 3.5;

// String - (ordem alfabetica)
echo "a" <=> "b"; // -1

// Array
echo [1,2,3] <=> [1,1]; // 1

// Funções
function intCompare1(int $a, int $b):int {
    return $a <=> $b;
}

echo intCompare1(2,2);

// Funções da maneira antiga
function intCompare2(int $a, int $b):int {
    return ($a < $b) ? -1 : (($a > $b) ? 1 : 0);
}

echo intCompare2(2,2);
