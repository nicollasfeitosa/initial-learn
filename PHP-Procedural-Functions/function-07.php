<?php

// Escopo da Função - Palavra reservada Global

$a = 1;

function somar($b){
    global $a;
    echo $a + $b;

    //echo $GLOBALS['a'] + $b;
}

function subtrair($c){
    echo $c - $GLOBALS['a'];
}

somar(2);