<?php

$id = $_GET['id'] ?? 0;


// Com isso você já inicia sua conexão
$mysql = new mysqli('localhost', 'root', 'sonic9595', 'php_mysql', 3306);

$stmt = $mysql->prepare('SELECT * FROM users where id > ?');
//stmt = statment

$stmt->bind_param('i', $id);
// i = inteiro / s = string  / b = blob = / d = double

$stmt->execute(); // faz a mesma coisa do query

$result = $stmt->get_result(); // recupre os resultados da query

$users = $result->fetch_all(MYSQLI_ASSOC);

foreach ($users as $user) {
    echo $user['id'] . ' - ' . $user['email'] .'<br/>';
}

?>