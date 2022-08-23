<?php

function converteDataBR($data){
    // 2020-09-17    - ano-mes-dia

    $data = explode('-', $data);
    $data = array_reverse($data); // inverte as chaves do array
    $data = implode("/", $data);

    echo $data;
}

function converteDataDB($data){

    $data = explode('/', $data);
    $data = array_reverse($data); // inverte as chaves do array
    $data = implode("-", $data);

    echo $data;
}

// converteDataDB('17/09/2020');

// echo '<br>';

// converteDataBR('2020-09-17');

// =================================

function converteData($data, $formato){
    if ($formato == 'BR'){
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

converteData('2020-09-17', 'BR');
echo '<br>';
converteData('17/09/2020', 'DB');


// function digaOi($nome){
//     echo "Oi $nome!";
// }

// digaOi('Nicollas');