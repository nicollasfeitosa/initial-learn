<?php 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    extract($_POST); // Extrai variáveis do array pelo nome
                    // ou seja cria as variáveis do array

    echo '<pre>';
    var_dump($nome, $idade);


    $data = compact('nome', 'idade', '_POST'); // Compacta variáveis e cria um array

    var_dump($data);



    /* 
    Dica: estude o filter_var e o filter_Var_array para fazer o
    mesmo processo que o filter_input, mas diretamente em variáveis.
    
    */

    
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
        <input type="text" id="texto" name="idade">
        <input type="submit" value="Enviar">

    </form>
  </div>
      
 </body>
</html>