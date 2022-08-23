<?php

$conn = require 'connection.php';

$id = $_GET['id'] ?? null; // Operador ?? define um valor padrão caso nao seja encontrado

//Delete de forma segura!
$stmt = $conn->prepare('DELETE FROM users WHERE id=?'); //Statement
$stmt->bind_param('i', $id); // Define o tipo e a variavel do dado e subistitui o id=? por id=$id de um modo seguro
$stmt->execute(); // Faz a query

//Nesse caso nao pegamos o result pois não precisamos de resultado!

header('location: ./index.php'); // Redirecionamos para a pagina inicial