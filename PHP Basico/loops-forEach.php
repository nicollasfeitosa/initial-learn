<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Loops ForEach</title>
</head>
<body>
    <?php // Script PHP

    // ForEach é especilizado em arrays e objetos
    // Ele para quando não existe mais elementos dentro da array a ser percorrido

    //Declaração da Array
    // $funcionarios = ['nicollas', 'nick', 'santos'];

    // //ForEach - Recuperando o Valor
    // foreach($funcionarios as $nome_funcionario){
    //     echo "$nome_funcionario <br/>";
    // }

    // //ForEach - Recuperando o indice
    // foreach($funcionarios as $id => $nome_funcionario){
    //     echo "ID: $id - Valor: $nome_funcionario <br/>";
    // }

    //Exemplo mais complexo
    $empregados = [
        ['nome' => 'Nicollas', 'salario' => 2500, 'data_nascimento' => '10/11/2000' ],
        ['nome' => 'Santos', 'salario' => 3500],
        ['nome' => 'Nick', 'salario' => 4500]
    ];

    //ForEach - Encadeados 
    foreach ($empregados as $id => $funcionario) {

        echo "Funcionario ID: $id <br/>";
        
        foreach ($funcionario as $id2 => $valor) {
            echo "$id2 - $valor <br/>";
        }

        echo "<hr/>";
    }




    ?>



</body>
</html>