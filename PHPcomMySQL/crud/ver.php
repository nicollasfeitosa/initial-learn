<?php

$conn = require 'connection.php';

$id = $_GET['id'] ?? null; // Operador ?? define um valor padrão caso nao seja encontrado

//Select de forma segura!
$stmt = $conn->prepare('SELECT * FROM users WHERE id=?'); //Statement
$stmt->bind_param('i', $id); // Define o tipo e a variavel do dado e subistitui o id=? por id=$id de um modo seguro
$stmt->execute(); // Faz a query
$result = $stmt->get_result(); // Retorna o resultado

$user = $result->fetch_assoc();

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
        <h1><?php echo $user['email'] ?></h1>

        <p>O id deste usuario é: <?php echo $user['id'] ?></p>

        <p>
            <a class="btn btn-primary" href="./editar.php?id=<?php echo $user['id']; ?>" role="button">Editar</a>
            <a class="btn btn-danger" href="./remover.php?id=<?php echo $user['id']; ?>" role="button">Remover</a>
        </p>

        <p><a class="btn btn-primary" href="./index.php" role="button">Voltar</a></p>
    </div>

      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>