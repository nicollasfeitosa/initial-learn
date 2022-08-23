<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Funções</title>
</head>
<body>
    <?php // Script PHP

    // // Sequenciais (numéricos)
    // $lista_frutas = array('Banana', 'Maça', 'Morango', 'Uva');

    // //Atribuindo um novo valor:
    // $lista_frutas[] = 'Tangerina';

    // // Funções nativas para debug
    // // Imprimir os arrays no browser
    // echo '<pre>'; // A tag pre mostra o array já formatado
    // var_dump($lista_frutas); // Mostra o tipo do conteudo da Array
    // echo '<hr/>';
    // print_r($lista_frutas); // Mostra o aray de forma mais simplificada
    // echo '</pre>';

    // // Imprimir apenas um valor do array

    // echo $lista_frutas[4];

    // Array Associativos
    $lista_frutas = array(
        'a' => 'banana',
        'b' => 'Maça',
        'x' => 'Morango',
        'y' => 'Uva',
        'z' => 'Abacate',
        '2' => 'Tangerina'
    );

    $lista_frutas['w'] = 'Abacaxi';

    echo '<pre>';
    var_dump($lista_frutas);
    echo '</pre>';

    echo $lista_frutas['2'];

    ?>
</body>
</html>