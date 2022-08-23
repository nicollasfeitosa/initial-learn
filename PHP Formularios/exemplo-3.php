<?php 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //$idade = isset($_POST['idade']) ? $_POST['idade'] : null;
    
    // null coalescing operator
    $idade = $_POST['idade'] ?? null;

    var_dump($idade);

    if (is_null($idade) || $idade === '') {
      die('Você não informou o valor');
    }

    $idade = (int)$idade;

    if ($idade <= 18) {
      die('Você é menor de idade');
    }

    $idade_string = (string)$idade;
    //$idade_string = (float)$idade;
    //$idade_string = (object)$idade;
    //$idade_string = (array)$idade;

    var_dump($idade_string, $idade);

    echo "Sua idade é: $idade";
}


?>

<!doctype html>
<html lang="pt-br">
  <head>
    <title>PHP - Formulários</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"
    >
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

  <div class="container mt-5 mx-auto text-center">
    <form action="index.php" method="post">

        <input type="text" id="texto" name="idade" placeholder="Idade">
        <input type="submit" value="Enviar">

    </form>
  </div>
      
 </body>
</html>