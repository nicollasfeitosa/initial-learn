
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Blocos, Echo e Print</title>
</head>
<body>
    <?php // Script PHP

    $nome = 'Nicollas';
    $cor = 'Azul';
    $idade = 18;
    $atividade = 'Jogar videogame';

    // operador .
    echo 'Olá ' . $nome . ', vi que sua cor preferida é ' . $cor . 
    ' e estou vendo que vc possui ' . $idade .' anos e gosta de ' . $atividade;

    //aspas duplas

    echo '<br/><br/><br/>';

    echo "Olá $nome vi que vc gosta da cor $cor e também gosta de $atividade"

    ?>

</body>
</html>