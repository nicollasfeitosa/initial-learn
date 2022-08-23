<?php

$conn = require __DIR__.'/utils/connection.php';

$conn->query('DROP TABLE posts');

$sql = '
    CREATE TABLE posts(
        id INT AUTO_INCREMENT PRIMARY KEY,
        title VARCHAR(50) NOT NULL,
        body TEXT NOT NULL,
        FULLTEXT KEY title (title, body)
    ) 
';

// Faz a query - $conn->query($sql);
if (!$conn->query($sql)){
    die('Erro ao processar a query!');
}

$result = $conn->query('DESCRIBE posts');

var_dump($result);

echo '<pre>';