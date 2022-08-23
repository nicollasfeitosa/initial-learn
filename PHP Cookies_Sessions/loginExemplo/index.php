<?php

require __DIR__.'/session.php';

//Script de Proteção
$user = $_SESSION['user'] ?? null;

if (!$user) {
    header('location: login.php');
    exit;
}

?>

<h1>Pagina protegida</h1>

<p>Olá, <?=$user['email']?></p>

<a href="logout.php">Logout</a>