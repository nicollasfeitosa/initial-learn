<?php

// Salva no Diretório
//var_dump(session_save_path(__DIR__.'/sections'));

// Inicia a sessão Obrigatório em toda pagina e acima de todos os scripts
session_start();

// Cria uma Sessão
$_SESSION['usuario'] = [
    'name' => 'Nicollas',
    'idade' => 18,
    'ativo' => true,
    'rate' => 9.3
];

// Mostra a sessão
var_dump($_SESSION['usuario']);

// Apaga a variavel da sessão
unset($_SESSION['usuario']);

// Atualiza uma Sessão
$_SESSION['usuario'] = [
    'name' => 'Nicollas Feitosa',
    'idade' => 18,
    'ativo' => true,
    'rate' => 9.3
];

// Acaba com a sessão
session_destroy();