<?php

$email = $_GET['email'] ?? null;

// Com isso você já inicia sua conexão
$mysql = new mysqli('localhost', 'root', 'sonic9595', 'php_mysql', 3306);

//$result = $mysql->multi_query('INSERT INTO users (email) VALUES ("'. $email .'")');

$result = $mysql->query('SELECT * FROM users where id > 2');

$users = $result->fetch_all(MYSQLI_ASSOC);

foreach ($users as $user) {
    echo $user['id'] . ' - ' . $user['email'] .'<br/>';
}

?>