<?php

// Conecta com o MySQL
$conn = require __DIR__.'/utils/connection.php';

$save = true; // Persistir dados?

// Reseta/apaga a tabela
$conn->query('TRUNCATE posts'); 

// Recebe o Codigo SQL do arquivo SQL
$sql = file_get_contents(__DIR__.'/insert_posts.sql');

//var_dump($sql); //DEBUG

// Faz a inserção da Query
$conn->begin_transaction();
$conn->query($sql);

//$conn->rollback(); // nega a inserção dos dados
//$conn->commit(); // permite a inserção dos dados

// a engine da tabela tem que dar suporte para as transações

if($save){
    $conn->commit(); // permite a inserção dos dados
} else {
    $conn->rollback();// nega a inserção dos dados
}

// Retorna os resultados da tabela posts
$result = $conn->query('SELECT * FROM posts');

// e armazena em Posts
$posts = $result->fetch_all(MYSQLI_ASSOC);

//Percorre o array e exibe os items
foreach ($posts as $post){
    echo $post['title']. '<br/>';
    echo $post['body']. '<br/>';
    echo '<hr/>';
}