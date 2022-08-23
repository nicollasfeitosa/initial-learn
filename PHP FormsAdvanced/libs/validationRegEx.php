<?php
// Validação com Expressão Regular

$url = filter_input(INPUT_POST, 'url');

if (preg_match('/w{0,3}\.*[a-z]+\.[a-z]+[a-z\.]*$/', $url, $matches)) {
    $url = $matches[0];
    return $url;
} else {
    die('URL IS INVALID!');
}

var_dump($url);
// var_dump(
//     preg_match('/w{0,3}\.*[a-z]+\.[a-z]+[a-z\.]*$/', $url, $matches)
//     , $url, $matches);