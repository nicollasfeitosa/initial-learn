<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Funções nativas de Strings</title>
</head>
<body>
    <?php

    $texto = "Nicollas é um bom Programador! <br/>";

    // String to Lower
    echo strtolower($texto);
    // String to Upper
    echo strtoupper($texto);

    $texto = "nicollas é um bom programador! <br/>";

    // Upper Case First
    echo ucfirst($texto);

    // String lenght
    echo strlen($texto) ."<br/>";

    // String Replace
    echo str_replace('programador', 'profissional', $texto);

    // String Subtract 
    echo substr($texto, 0, 8) . '...';

    ?>
    
</body>
</html>