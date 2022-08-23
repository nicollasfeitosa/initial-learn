
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Operadores de Atribuições Aritiméticos </title>
</head>
<body>
    <?php // Script PHP

    // Configura qual é o timezone da aplicação
    date_default_timezone_set('America/Sao_Paulo');

    // Retorna qual é o timezone internal do PHP
    echo date_default_timezone_get(); 

    echo '<br/>';

    // Recupera a data atual (Data corrente)
    // Dentro da string você pode configurar como deseja 
    // que seja exibido a data e você encontrar os paramentros em:
    // https://www.php.net/manual/pt_BR/function.date
    echo date('d/m/Y H:i'); // 06/08/2020

    // Calcular tempo entre datas
    // O padrão computacional usado para calculos utilize o padrão: 2020/08/06
    $data_inicial = '2018-06-10';
    $data_final = '2020-08-06';

    // Convertendo para timestamp (retorno em segundos)
    $time_incial = strtotime($data_inicial);
    $time_final = strtotime($data_final);

    $diferenca_segundos = abs($time_final - $time_incial); // Função abs retorna o valor absoluto de um numero

    echo "<br/> A diferença de segundos entre as datas é $diferenca_segundos";

    $segundos_por_dia = 24 * 60 * 60; // 24hrs * 60 minutos * 60 segundos
    echo "<br/> Um dia possui: $segundos_por_dia segundos";

    $diferenca_dias = $diferenca_segundos / $segundos_por_dia; // 86400

    echo "<br/> A diferença em dias entre as datas são $diferenca_dias dias";


    // Versão Simplificada

    $time1 = new DateTime('20180610'); 
    $time2 = new DateTime(); // Data atual
    $interval =  $time2->diff($time1);
    echo $interval->days;

    ?>

</body>
</html>