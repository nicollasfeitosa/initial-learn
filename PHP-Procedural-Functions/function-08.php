<?php

// Funções Recursivas
// é quando a função auto-se chama e inicia uma repetição
// função recursiva tem vantagem contra repetição porem gastam mais processamento

function recursivo($i, $tabuada){

    if ($i <= 10) {
        $result = ($i * $tabuada);
        echo "$i x $tabuada = $result <br/>";
        recursivo($i + 1, $tabuada);
    }
    
}

recursivo(0, 9);