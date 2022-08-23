<?php 

$erro = ['alertType' => 'danger',
          'alertTitle' => 'Ops!',
          'alertText' => ' O nome é diferente de Nicolau'];

$deucerto = ['alertType' => 'success',
            'alertTitle' => 'Sucesso!',
            'alertText' => ' Você cadastrou com sucesso!'];  

if($_POST['nome'] != 'nicolau'){
    echo json_encode($erro);
    exit;
}

$resposta = array_merge($_POST, $deucerto);

echo json_encode($resposta);

