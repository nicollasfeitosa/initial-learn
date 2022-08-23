<?php 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  echo '<pre>';
    var_dump($_POST);
    var_dump($_GET);
    var_dump($_REQUEST); // TRAS O GET E O POST
  echo '</pre>';
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
    <form action="" method="post">

        <input type="text" id="texto" name="nome">

        <input type="submit" value="Enviar">
    </form>

    <a href="?page=sobre-nos">Nome</a>

  </div>
      
 </body>
</html>