<?php

// Passar parâmetro default

function converteData($data, $formato = "br"){
    if ($formato == 'br'){
        $data = explode('-', $data);
        $data = array_reverse($data); // inverte as chaves do array
        $data = implode("/", $data);

    } else {
        $data = explode('/', $data);
        $data = array_reverse($data); // inverte as chaves do array
        $data = implode("-", $data);
    
    }
    echo $data;
}

converteData('2020-10-12');