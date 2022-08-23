<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - False, Null e Empty</title>
</head>
<body>
    <?php // Script PHP

    // false (true/false) - tipo de variável boolean
    // null e empty - valores especiais

    $variavel1 = null; // O valor null tambem é considerado vazio              
    $variavel2 = ''; // Um espaço não é considerado vázil ou empty
    $variavel3  = false;  

    // a função is_null retorna true ou false caso a variavel seja null
    // a função empty retorna true ou false caso a variavel seja vazia

    // Teste Variavel 1 - Nula
    if(is_null($variavel1)){
        echo "Sim, a variavel 1 é null <br/>";
    } else {
        echo "Não, a variavel 1 não é null <br/>";
    }

    if(empty($variavel1)){
        echo "Sim, a variavel 1 é vazia <br/>";
    } else {
        echo "Não, a variavel 1 não é vazia <br/>";
    }

    // Teste Variavel 2 - Vazia
    if(is_null($variavel2)){
        echo "Sim, a variavel 2 é null <br/>";
    } else {
        echo "Não, a variavel 2 não é null <br/>";
    }

    if(empty($variavel2)){
        echo "Sim, a variavel 2 é vazia <br/>";
    } else {
        echo "Não, a variavel 2 não é vazia <br/>";
    }

    // Teste Variavel 3 - False
    if(is_null($variavel3)){
        echo "Sim, a variavel 3 é null <br/>";
    } else {
        echo "Não, a variavel 3 não é null <br/>";
    }

    if(empty($variavel3)){
        echo "Sim, a variavel 3 é vazia <br/>";
    } else {
        echo "Não, a variavel 3 não é vazia <br/>";
    }

    ?>

</body>
</html>