<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Loops</title>
</head>
<body>
    <?php // Script PHP

    $num = 0;

    while ($num < 10) {
        
        $num++;

        if ($num == 2 || $num == 9) {
            continue;
        }

        echo "$num <br/>";

        // if ($num > 5) {
        //     break; // Pausa a estrutura de repetição
        // }
    }

    ?>



</body>
</html>