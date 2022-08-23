<?php 

    namespace A; // Inicio do Bloco A

    class Cliente implements Cadastro, \B\Cadastro {
        public $nome = 'Nicollas';

        public function __construct() {
            echo '<pre>';
            print_r(get_class_methods($this));
            echo '</pre>';
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

    namespace B; // Inicio do Bloco B

    class Cliente implements Cadastro {
        public $nome = 'Teste';

        public function __construct() {
            echo '<pre>';
            print_r(get_class_methods($this));
            echo '</pre>';
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

    $c = new \A\Cliente();  // para instanciar um objeto contido no namespace A utlizando \A\

    print_r($c);
    echo $c->__get('nome');

    // Fim do Bloco B


?>
