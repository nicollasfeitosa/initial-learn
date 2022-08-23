<?php

$conn = require __DIR__.'/utils/connection.php'; // Conecta com o MySQL

// Buscas por relevancia

//$term = $argv[1] ?? null; // no caso do terminal do php
$term = 'framework';
$term = '%'.$term.'%'; // Buscando parte de uma string (não é o melhor metodo para pesquisas)

$stmt = $conn->prepare('SELECT *, MATCH(title, body) AGAINST(? IN BOOLEAN MODE) as score FROM posts ORDER BY score DESC');
$stmt->bind_param('s', $term);
$stmt->execute();

$result = $stmt->get_result();
$posts = $result->fetch_all(MYSQLI_ASSOC);

echo '<pre>';
var_dump($posts);