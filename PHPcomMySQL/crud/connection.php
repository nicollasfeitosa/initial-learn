<?php
// Connections

// Com isso você já inicia sua conexão
$conn = new mysqli('localhost', 'root', 'sonic9595', 'php_mysql', 3306);
//                  endereço     user    senha       database   port

// Como saber se a conexão foi bem sucedida?
if ($conn->connect_errno) {
    // Interrompe a execução do script e faz uma exibição do erro
    die('Falhou em conectar: ('. $conn->connect_errno .') '. $conn->connect_error);
}

return $conn;

?>