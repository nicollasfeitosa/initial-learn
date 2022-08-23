<?php 

    namespace A; // Inicio do Bloco A

    class Cliente implements Cadastro {
        public $nome = 'Nicollas';

        public function __construct() {
            //
        }

        public function __get($attr) {
            return $this->$attr;
        }

        public function salvar() {
            echo 'Salvar';
        }

        public function remover() {
            echo 'Remover';
        }
    }

    interface Cadastro {
        public function salvar();
    }

    // Fim do Bloco A


?>
