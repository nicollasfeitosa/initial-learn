
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - IF e Else</title>
</head>
<body>
    <?php // Script PHP

    /*
    
    if (condição) {
        # caso verdadeira sera executado esse bloco
    } else {
        # caso falso sera executado esse bloco
    }
    
    ====================================================

    if (condição) {
        # caso verdadeira sera executado esse bloco
    } else if (condição) {
        # techo de codigo a ser execultado
    } else {
        # caso falso sera executado esse bloco
    }

    */ 

    // EXEMPLOS:
    if (true) {
        echo "verdadeiro <br/>";
    } else {
        echo "falso <br/>";
    }

    // == IGUAL
    if (2 === 2) {
        echo "são iguais <br/>";
    } else {
        echo "não são iguais <br/>";
    }

    // === IDENTICO
    if (2 === '2') {
        echo "são identicos <br/>";
    } else {
        echo "não são identicos <br/>";
    }

    // != ou <> Diferente
    if ('x' != 'y') {
        echo "são diferentes <br/>";
    } else {
        echo "não são diferentes <br/>";
    }

    //!== Não identico
    if (1 !== '1') {
        echo "verdadeiro não identico <br/>";
    } else {
        echo "false indenticos <br/>";
    }

    // < menor
    if (2 < 18) {
        echo "True <br/>";
    } else {
        echo "False <br/>";
    }

    // > maior
    if (19 > 18) {
        echo "True <br/>";
    } else {
        echo "False <br/>";
    }

    // < menor igual
    if (0 <= 2) {
        echo "True <br/>";
    } else {
        echo "False <br/>";
    }

    // > maior igual
    if (2 >= 1) {
        echo "True <br/>";
    } else {
        echo "False <br/>";
    }

    ?>
    

</body>
</html>