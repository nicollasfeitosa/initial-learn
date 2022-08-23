<?php

    namespace B; // Inicio do Bloco B

    class Cliente implements Cadastro {
        public $nome = 'Teste';

        public function __construct() {
            //
        }
        
        public function __get($attr) {
            return $this->$attr;
        }

        public function remover() {
            echo 'Remover';
        }
    }

    interface Cadastro {
        public function remover();
    }

    $c = new Cliente();  // para instanciar um objeto contido no namespace A utlizando \A\

    // Fim do Bloco B
?>