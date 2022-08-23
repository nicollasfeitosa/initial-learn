<?php

session_start();

$_SESSION['CSRF_TOKEN'] = sha1(rand(1, 200000));

?>

<!doctype html>
<html lang="pt-br">
  <head>
    <title>Avançando com Formulários</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      
    <div class="container mt-5">
        <form action="send.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <input type="hidden" name="_csrf_token" value="<?php echo $_SESSION['CSRF_TOKEN']?>">
              <input type="text" name="nome" placeholder="Nome">
              <input type="text" name="url" placeholder="Seu site">
              <input type="email" name="email" placeholder="Email">
              <textarea name="descricao" placeholder="Descrição"></textarea>
            </div>
            
            <div class="form-group">
              <img src="captcha.php">
              <input type="text" name="_captcha" placeholder="Digite as letras acima">
              <input type="submit" value="Enviar">
            </div>
        </form>
    </div>

 </body>
</html>