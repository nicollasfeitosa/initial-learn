<?php

// Connections
$postgres = pg_connect("host=127.0.0.1 dbname=redstone user=postgres password=sonic9595");

// Realizando uma query no banco de dados
$query = pg_query($postgres, "select * from clientes"); // Mostra os dados da tabela cliente

// Puxando todas linhas da tabela inteira
$users = pg_fetch_all($query);

//Listando dados do banco de dados
foreach ($users as $user) {
    echo $user['id'] . ' - ' . $user['nome'] . ' ' . $user['sobrenome'] . '<br>';
}

//Debug
// echo '<pre>';
// print_r($users);
// echo '</pre>';

?>