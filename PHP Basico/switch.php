
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Switch</title>
</head>
<body>
    <?php // Script PHP

    // No PHP é realizado o Casting de Tipos
    // Não é realizado comparação por indentico e sim por igualdade

    // TRUE é igual a 1 Internamente dentro do PHP

    $parametro = '1';

    switch ($parametro) {
        case 1: // 1 == $parametro
            echo "Numero $parametro";
            break;
        case 2:
            echo "Numero $parametro";
            break;
        case 3:
            echo "Numero $parametro";
            break;
        
        default:
            echo 'Parametro Default';
            break;
    }


    ?>

</body>
</html>