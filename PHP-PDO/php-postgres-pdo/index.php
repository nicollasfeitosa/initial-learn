<?php 

// Conexão PDO com Postgres

$dsn = 'pgsql:host=localhost;dbname=bancoteste';
$user = 'postgres';
$senha = '123456';

try {
    $conn = new PDO($dsn, $user, $senha);

    $query = "select * from tb_usuarios";

    //$stmt = $conn->query($query); // o método query retorna um stmt

    foreach($conn->query($query) as $key => $value) {
        var_dump($value[1]);
        echo '<hr>';
    }

    //$lista = $stmt->fetchAll(PDO::FETCH_ASSOC); 

    //var_dump($lista);

    // foreach($lista as $key => $value) {
    //     echo $value['nome'];
    //     echo '<hr>';
    // }


} catch (PDOException $e) {
    echo 'Erro: '. $e->getCode().' Mensagem: '.$e->getMessage();
    //Registrar erro
}


