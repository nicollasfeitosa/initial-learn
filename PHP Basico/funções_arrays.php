<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - False, Null e Empty</title>
</head>
<body>
    <?php // Script PHP

    // is_array() - Retorna true se caso for um array
    $array = ['notebook', 'teclado'];
    $retorno = is_array($array);

    if ($retorno) {
        echo 'Sim é um array';
    }else {
        echo 'Não é um array';
    }

    // array_keys() - Retorna um Array com os indices
    $array = [1 => 'a', 4 => 'b', 7 => 'c'];
    
    echo '<pre>';
        print_r($array);
    echo '</pre>';

    $chaves_array = array_keys($array);

    echo '<pre>';
        print_r($chaves_array);
    echo '</pre>';

    // sort() - Ordena um array e reajusta seus indices
    $array = ['notebook', 'teclado', 'cabo displayport', 'cpu', 'gabinete'];

    echo '<pre>';
        print_r($array);
    echo '</pre>';

    sort($array); // Retorna true ou false ou seja se ele conseguiu ordenar ou não

    echo '<pre>';
        print_r($array);
    echo '</pre>';

    // asort() - Ordena um array preservando os índices
    $array = ['notebook', 'teclado', 'cabo displayport', 'cpu', 'gabinete'];

    echo '<pre>';
        print_r($array);
    echo '</pre>';

    asort($array); // Retorna true ou false ou seja se ele conseguiu ordenar ou não

    echo '<pre>';
        print_r($array);
    echo '</pre>';

    // count() - Conta a quantidade de elementos de um array
    $array = ['notebook', 'teclado', 'cabo displayport', 'cpu', 'gabinete', 'gpu'];

    echo '<pre>';
        print_r($array);
        echo count($array);
    echo '</pre>';

    // array_merge() - Funde um ou mais arrays retornando um novo array

    $array1 = ['Windows 10 Home', 'Windows 10 Pro'];
    $array2 = ['Linux'];
    $array3 = ['Ubuntu'];

    $array_so = array_merge($array1, $array2, $array3);

    echo '<pre>';
        print_r($array_so);
    echo '</pre>';

    // explode() - Divide uma string baseada em um delimitador 
    // Primeiro parametro é o delimitador e o segundo é a string
    // A função também retorna um novo array
    $string = '26-04-2018';
    $array = explode('-', $string);

    echo '<pre>';
        echo $string;
        print_r($array);
        echo $array[2]. '-' . $array[1]. '-' .$array[0];
    echo '</pre>';

    // implode(array) - Junta elementos de um array em uma string
    // Primeiro parametro é o delimitador e o segundo é a array
    $array = ['a', 'b', 'c', 'd'];
    $string = implode(' ',$array);

    echo $string;

    ?>



</body>
</html>