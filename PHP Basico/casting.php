
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Casting de Tipos</title>
</head>
<body>
    <?php // Script PHP

    //Casting de Tipos de Variaveis
    // int, float, string, boolean

    // gettype() -> Retorna o tipo da variavel
    $valor = '22.12';

    //$valor2 = (float) $valor; // Converte para Float, double, real
    //$valor2 = (string) $valor; // Converte para String
    //$valor2 = (int) $valor; // Converte para Inteiro
    $valor2 = (boolean) $valor; // Converte para Bool ou Boolean

    //https://www.udemy.com/course/web-completo/learn/lecture/10072010#overview

    echo gettype($valor);
    echo '<br/>';
    echo gettype($valor2);

    ?>

</body>
</html>