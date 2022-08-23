<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Pesquisas</title>
</head>
<body>
    <?php // Script PHP

    //in_array() - Retorna true ou false para a existencia do que esta sendo procurado
    $lista_pessoas = ['Steve Jobs', 'Bill Gates', 'Nicollas'];

    $existe = in_array('nicollas', $lista_pessoas);
    // true sera impresso como 1
    // false ser impresso como vazio

    if ($existe) {
        echo 'Sim o valor pesquisado existe no array';
    } else {
        echo 'Não encontramos o valor pesquisado no array';
    }


    //array_search() -  retorna o indice do valor pesquisado caso exista
    $indice = array_search('Nicollas', $lista_pessoas);

    if ($indice != null) {
        echo "Sim o valor pesquisado existe no array e o indice é $indice";
    } else {
        echo "Não encontramos o valor pesquisado no array e o indice é $indice";
    }


    // Pesquisando em Arrays multidimenssionais
    $lista_coisas = [
        'frutas' => ['Morango', 'Kiwi', 'Abacate'],
        'pessoas' => ['Nicollas', 'Nick', 'SonicPlays']
    ];

    in_array('Kiwi', $lista_coisas['frutas']);

    ?>

    <!-- Debug -->
    <pre> 
        <?= print_r($lista_coisas) ?>
    </pre>
</body>
</html>