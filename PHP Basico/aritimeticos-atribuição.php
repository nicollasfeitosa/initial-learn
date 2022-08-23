
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Operadores de Atribuições Aritiméticos </title>
</head>
<body>
    <?php // Script PHP

    /*
    Atribuição simples(=)
    Atribuição com adição (+=)
    Atribuição com subtração (-=)
    Atribuição com multiplicação (*=)
    Atribuição com divisão (/=)
    Atribuição com módulos (%=)
    Atribuição com concatenação (.=)
    */

    $num = 10; 
    $num += 5; //$num = $num + 5;
    $num -= 2;
    $num *= 2;
    $num /= 2;
    $num %= 2;

    echo $num;

    ?>

</body>
</html>