<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Operadores Logicos</title>
</head>
<body>
    <?php // SCRIPT PHP

    //E: && ou AND -> ambos (todos) precisam corresponder a Verdadeiro
    //OU: || ou OR -> apenas 1 precisa corresponder a Verdadeiro
    //XOR -> retorna verdadeiro se uma for falsa e outra verdadeira
    //! -> Inverte o resultado retornado pela expressão

    if (!(5 == 3 && 10 > 3)) {
        echo 'Verdadeiro';
    } else {
        echo 'Falso';
    }

    ?>

</body>
</html>