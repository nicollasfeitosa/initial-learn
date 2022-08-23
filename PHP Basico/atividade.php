
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Atividade fixação de Conteudo IF-ELSE</title>
</head>
<body>
    <?php // Script PHP

    $nome = 'Nicolau';
    $idade = 18;
    $peso = 56.6;

    

    if (($idade >= 16 && $idade <= 69) && $peso >= 50) {
        $capacitado =  'Atende aos requisitos';
    } else {
        $capacitado =  'Não Atende aos requisitos';
    }

    ?>

    <h1>Ficha cadastral</h1>
    <hr/>
    <p>Nome: <?= $nome ?></p>
    <p>Idade: <?= $idade ?></p>
    <p>Peso: <?= $peso ?></p>
    <p>
    <?= $capacitado ?>
    </p>
    



</body>
</html>