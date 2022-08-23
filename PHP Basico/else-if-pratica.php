
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Pratica Else e IF</title>
</head>
<body>
    <?php // Script PHP

    // E-Comerce Pratica Else e IF
    // Se usuario possuir o cartão da loja e o valor da compra for superior a 100 então retorna DESCONTO no frete


    $cartao_local = true; // Define se o usuario tem o cartão da loja ou não 
    $valor_compra = 225;
    $valor_frete = 50;
    $recebeu_desconto = false; // Variavel de controle

    
    if ($cartao_local && $valor_compra >= 100) { // $cartao_local == true
        $valor_frete = 0;
        $recebeu_desconto = true;
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