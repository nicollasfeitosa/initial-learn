<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Loops ForEach</title>
</head>
<body>
    <?php // Script PHP

    //Crie um script capaz de produzir atraves de um laço de repetição um array
    // com 6 elementos numericos aleatorios entre 1 e 60, simulando o funcionamento do sorteio
    // da mega sena. atente-se ao fato de que os numeros aleatorios contigos dentros do array
    // nao podem ser repitidos.

    $numeros = array();

    // count($numeros) - Retorna a quantidade de elementos de um array
    // in_array() - Retorna true ou false para a existencia do que esta sendo procurado

    while(count($numeros) <= 5){

        $num = rand(1, 60);

        if(!in_array($num, $numeros)){
            $numeros[] = $num;
        }

    }

    foreach ($numeros as $id => $valor) {
        echo "Numero Sorteado: $valor <br/>";
    }

    // Debug
    // echo '<pre>';
    // print_r($numeros);
    // echo '</pre>';



    ?>



</body>
</html>