<?php

// Parâmetros por referencia e Parâmetros por Valor

// function add($i){
//     $i++;
//     echo "Internamente: $i <br>";
// }

function add(&$i){ // & == recebe a referencia e não por valor
    $i++;
    echo "Internamente: $i <br>";
}

$numero = 1;

add($numero);

echo "Externo: $numero <br>";


