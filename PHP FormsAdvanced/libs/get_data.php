<?php

$nome = filter_input(INPUT_POST, 'nome');
$email = filter_input(INPUT_POST, 'email');
$descricao = filter_input(INPUT_POST, 'descricao');
$url = require_once 'validationRegEx.php';

var_dump('----FORM DATA----', $nome, $email, $descricao, $url);

$json = file_get_contents("php://input");
$json = json_decode($json, true); // TRUE = array - Omitido = Objeto

var_dump('----JSON----', $json);

if (is_null($nome)) {
    $nome = $json['nome'] ?? null;
}

if (is_null($email)) {
    $email = $json['email'] ?? null;
}

if (is_null($descricao)) {
    $descricao = $json['descricao'] ?? null;
}

echo '<pre>';
var_dump('----FINAL----', $nome, $email, $descricao, $url);
echo '</pre>';