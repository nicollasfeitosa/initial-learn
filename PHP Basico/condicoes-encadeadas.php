
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Condições Encadeadas</title>
</head>
<body>
    <?php // Script PHP

    $cartao_local = true; // Define se o usuario tem o cartão da loja ou não 
    $valor_compra = 775;
    $valor_frete = 50;
    $recebeu_desconto = true; // Variavel de controle


    if ($cartao_local && $valor_compra >= 400) { 

        $valor_frete = 0;

    } else if ($cartao_local && $valor_compra >= 300) {

        $valor_frete = 10;

    } else if ($cartao_local && $valor_compra >= 100) {

        $valor_frete = 25;

    } else {

        $recebeu_desconto = false;

    }

    ?> 

    <h1>Detalhes do pedido</h1>
    <p>Possui o cartão da loja?</p>
    <?php 
        if ($cartao_local) { // $cartao_local == true
            echo 'Sim';
        } else {
            echo 'Não';
        }
    ?>

    <h2>Valor da compra: <?= $valor_compra?></h2>

    <p>Recebeu o desconto no frete?</p>
    <?php 
        if ($recebeu_desconto) { // $recebeu_desconto == true
            echo 'Sim';
        } else {
            echo 'Não';
        }

        
    ?>

    <h2>Valor do frete: <?= $valor_frete?></h2>

</body>
</html>