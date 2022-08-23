<?php 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $nome = $_POST['nome'] ?? null;
  
  // Filtragem de Dados
  $nome = trim($nome); // Remove espaços antes e depois
  $nome = stripslashes($nome); // Remove a barra invertida
  $nome =  htmlspecialchars($nome, ENT_NOQUOTES); // Transforma em caracteres sem renderizar a tag
  /*
  < => &lt      ENT_COMPACT
  > => &gt      ENT_COMPACT
  " => &quote       ENT_QUOTE
  ' => &#039       ENT_QUOTE
  & => &amp     ENT_COMPACT  
  
  */

  var_dump($nome);

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

        <input type="text" id="texto" name="nome">
        <input type="submit" value="Enviar">

    </form>
  </div>
      
 </body>
</html>