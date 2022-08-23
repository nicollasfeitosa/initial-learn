<?php 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo '<pre>';
    var_dump($_POST);
    var_dump($_FILES);
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
    <form action="index.php" method="post" enctype="multipart/form-data">

        <input type="text" name="texto"> <br>
        <input type="email" name="email"> <br>
        <input type="color" name="color"> <br>
        <input type="date" name="date"> <br>
        <input type="datetime" name="datetime"> <br>
        <input type="file" name="file"> <br>
        <input type="number" name="number"> <br><br>
        <input type="radio" name="radio" value="valor 1"> valor 1 <br><br>
        <input type="radio" name="radio" value="valor 2"> valor 2  <br><br>
        <input type="radio" name="radio" value="valor 3"> valor 3  <br><br>
        <input type="checkbox" name="checkbox" value="checked"> aaaa <br><br>
        <input type="submit" value="Enviar">
    </form>
  </div>
      
 </body>
</html>