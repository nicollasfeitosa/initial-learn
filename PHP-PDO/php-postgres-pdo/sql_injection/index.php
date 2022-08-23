<?php 

if (!empty($_POST['user']) && !empty($_POST['senha'])) {
    
    // Conexão PDO com Postgres
    $dsn = 'pgsql:host=localhost;dbname=bancoteste';
    $user = 'postgres';
    $senha = '123456';

    try {
        $conn = new PDO($dsn, $user, $senha);

        $query = "SELECT * from tb_usuarios where ";
        $query .= " email = :usuario ";
        $query .= " AND senha = :senha ";

        $stmt = $conn->prepare($query); // Prepare não executa a query ele aguarda ordens
        $stmt->bindValue(':usuario', $_POST['user']);
        $stmt->bindValue(':senha', $_POST['senha']); // tambem pode ser definido o tipo como terceiro parametro

        $stmt->execute(); // Executa a query
        $result = $stmt->fetch(); // Retorna um unico registro

        var_dump($result);


    } catch (PDOException $e) {
        echo 'Erro: '. $e->getCode().' Mensagem: '.$e->getMessage();
        //Registrar erro
    }

}
?>

<!DOCTYPE html>
<html lang="pt-Br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SQL INJECTION</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="user" id="user" placeholder="User">
        <br>
        <input type="password" name="senha" id="senha" placeholder="Senha">
        <br>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>