<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Funções</title>
</head>
<body>
    <?php

    //Função VOID ou seja sem Retorno
    //Definição da função
    function exibirBoasVindas($nome) {
        echo "Bem vindo $nome ao curso";
    }

    //Chamando a função
    exibirBoasVindas('Nicollas');

    // ===================================== 

    // Função com Retorno - Return 
    function calcularAreaTerreno($largura, $comprimento){ // Assinatura / Argumentos/ Parametros 
        $area = $largura * $comprimento;
        return $area;
    }
    
    echo calcularAreaTerreno(30, 50);

    $resultado = calcularAreaTerreno(30, 50);
    echo $resultado

    ?>



    <p> <?= calcularAreaTerreno(30, 50); ?>  </p>
    
    <!-- Tag de impressao -->
</body>
</html>