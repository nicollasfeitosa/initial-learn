<?php

//Tratamento de erros customizados

class MinhaExceptionCustomizada extends Exception {
    private $erro = '';

    public function __construct($erro){
        $this->erro = $erro;
    }

    public function exibirMensagemErroCustomizada(){
        echo $this->erro;
    }
}

try {
    //code...
    throw new MinhaExceptionCustomizada('Esse é um erro de teste');

} catch (MinhaExceptionCustomizada $e) {
    $e->exibirMensagemErroCustomizada();
}

?>