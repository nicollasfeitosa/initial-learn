<?php

// Scalar Type Hints

declare(strict_types = 1); // muda a config do casting interno do PHP

function somar(float $a, float $b){

    return $a + $b;
}

echo somar(2, 4);





function digaOi(string $nome){
    echo "Oi $nome";
}

//digaOi('Nicollas');