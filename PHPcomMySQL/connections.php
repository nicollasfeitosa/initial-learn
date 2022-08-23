<?php

// Com isso você já inicia sua conexão
$conn = new mysqli('localhost', 'root', 'sonic9595', 'php_mysql', 3306);
//                  endereço     user    senha       database   port

// Como saber se a conexão foi bem sucedida?
if ($conn->connect_errno) {
    // Interrompe a execução do script e faz uma exibição do erro
    die('Falhou em conectar: ('. $conn->connect_errno .') '. $conn->connect_error);
}

// Quando não exibido erro significa que a conexão foi bem sucedida!



//Comando para inserir dados

//$result = $mysql->query('INSERT INTO users (email) VALUE ("julia@nicollasfeitosa.com") ');

$result = $mysql->query('SELECT * FROM users');

$users = $result->fetch_all(MYSQLI_ASSOC);

foreach ($users as $user) {
    echo $user['id'] . ' - ' . $user['email'] .'<br/>';
}



?>