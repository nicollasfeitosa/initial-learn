<?php

// Funções Anonimas de Callback

// $numeros = [12, 44, 25, 99, 102, 18];

// // $filtro = function($v){
// //     return $v <= 50;
// // };

// // $saida = array_filter($numeros, $filtro);

// $saida = array_filter($numeros, function($v) {
//     return $v <= 50;
// });

// var_dump($saida);

$a = 9;

$voceDecide = function($numero, $callback) {
    if (is_callable($callback)) {
        return $callback($numero);
    } else {
        throw new Exception("Callback precisa ser uma função");
    }
    
};

$multiplica = $voceDecide(10, function($n) use ($a){
    return $n * $a;
});

echo $multiplica;

$subtração = $voceDecide(25, function($n){
    return $n - 10;
});

//echo $subtração;

//$meu_erro = $voceDecide(3, "abc");

//echo $meu_erro;


