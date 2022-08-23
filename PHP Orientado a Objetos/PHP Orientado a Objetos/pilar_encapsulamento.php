<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Pilar da Abstração</title>
</head>
<body>
    <?php // Script PHP

    // Modelo da abstração
    class Pai {
        private $nome = 'Nicollas';
        protected $sobrenome = 'Feitosa';
        public $humor = 'Feliz';

        // public function __get($attr){
        //     return $this->$attr;
        // }

        // public function __set($attr, $value) {
        //     $this->$attr = $value;
        // }

        private function executarMania(){
            echo 'Assobiar';
        }

        protected function responder(){
            echo 'Oi';
        }

        public function executarAcao(){
            //Condicional 
            $this->executarMania();
            echo '<br>';
            $this->responder();

        }
    }
    

    class Filho extends Pai {
        public function getAtributo($attr){
            return $this->$attr;
        }
        public function setAtributo($attr, $valor){
            $this->$attr = $valor;
        }
    }

    $filho = new Filho();
    
    debugArray($filho);

    $filho->setAtributo('nome', 'nicollas');
    echo $filho->getAtributo('humor');

    debugArray($filho);

    //exibir os metodos do objeto
    debugArray(get_class_methods($filho));
    

    //Debbuger By Nicollas Feitosa
    function debugArray($array){
        echo '<pre>';
        print_r($array);
        echo '</pre>';
        echo '<br/>';
    }

    ?>

</body>
</html>