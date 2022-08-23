<?php 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
  $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
  // Vantagens do Filter: Retorna o valor NULL se não existe
  // INPUT_GET para get

  var_dump($nome);
  var_dump($idade);


  // Filtro em Array
  $dados = filter_input_array(INPUT_POST, FILTER_SANITIZE_SPECIAL_CHARS);
  // Traz todos os dados em um array

  var_dump($dados);

  //

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

        <input type="text" id="nome" name="nome">
        <input type="text" id="idade" name="idade">

        <input type="submit" value="Enviar">

    </form>
  </div>
      
 </body>
</html>