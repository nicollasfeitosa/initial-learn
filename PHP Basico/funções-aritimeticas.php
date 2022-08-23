
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Operadores de Atribuições Aritiméticos </title>
</head>
<body>
    <?php // Script PHP


    $num = 2.55; 

    echo ceil($num); // Arredondamento para cima/mais
    echo '<br/>';
    echo floor($num); // Arredondamento para baixo/menos
    echo '<br/>';
    echo round($num); // Arredondamento com base na fração
    echo '<br/>';
    echo sqrt($num); // Raiz quadrada
    echo '<br/>';

    // Numero randomicos
    echo rand(); // Retorna um valor aleatorio de 0 até randmax
    echo '<br/>';
    echo rand(1, 10); // Retorna um valor entre os parametros
    echo '<br/>';
    echo getrandmax(); // Retorna qual é o valor de randmax

    ?>

</body>
</html>