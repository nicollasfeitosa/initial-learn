<?php

$conn = require __DIR__.'/utils/connection.php'; // Conecta com o MySQL

// Buscas utilizando operador Like

//$term = $argv[1] ?? null; // no caso do terminal do php
$term = 'laravel';
$term = '%'.$term.'%'; // Buscando parte de uma string (não é o melhor metodo para pesquisas)

$stmt = $conn->prepare('SELECT * FROM posts WHERE title LIKE ?;');
$stmt->bind_param('s', $term);
$stmt->execute();

$result = $stmt->get_result();
$posts = $result->fetch_all(MYSQLI_ASSOC);

var_dump($posts);