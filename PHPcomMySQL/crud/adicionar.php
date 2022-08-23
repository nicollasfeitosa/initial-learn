<?php

// Se a requisição for post ou seja verifica se o formulario foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $conn = require 'connection.php'; // Realiza a conexão com o banco de dados

    $email = $_POST['email'] ?? null;

    //Inser de forma segura!
    $stmt = $conn->prepare('INSERT INTO users (email) VALUES (?)'); //Statement
    $stmt->bind_param('s', $email); // Define o tipo e a variavel do dado e subistitui o id=? por id=$id de um modo seguro
    $stmt->execute(); // Faz a query no caso Cadastro

    header('location: ./index.php');
    die();

}



?>

<!doctype html>
<html lang="pt-br">
  <head>
    <title>CRUD</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

    <div class="container">
        <h1 class="mb-4">Adicionar um Novo Usuario!</h1>

        <form action="./adicionar.php" method="post">
            <input type="text" name="email">
            <input type="submit" value="Enviar">
        </form>

        <p><a class="btn btn-primary mt-3" href="./index.php" role="button">Voltar</a></p>

    </div>

      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>