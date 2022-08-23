<?php

// Funções Anonimas - Escopos - Herdados

$a = 2;
$z = 3;

$soma = function($b) use ($a , $z) {
    return $a + $b + $z;
};

echo $soma(4);
