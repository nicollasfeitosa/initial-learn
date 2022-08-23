<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Pilar da Abstração</title>
</head>
<body>
    <?php // Script PHP

    // Treinando abstração

    //modelo
    class Funcionario { //O nome da Class Segue o padrão camelcase

        //atributos - também são calmelcase apartir da segunda palavra
        public $nome = null;
        public $telefone = null;
        public $numFilhos = null;
        public $cargo = null;
        public $salario = null;
        
        //métodos setters magico - seta o valor do atributo - função tipo VOID 
        function __set($atributo, $valor){ // Por convenção o __set é o nome padrão
            $this->$atributo = $valor;
        }

        //métodos getters magico - recupera o valor do atributo - função tipo RETURN ou Retorno
        function __get($atributo){ // Por convenção o __get é o nome padrão
            return $this->$atributo;
        }

        //funções
        function resumirCadastro(){
            return $this->__get('nome')." possui ".$this->__get('numFilhos')." filho(s) e seu telefone é ".$this->__get('telefone')."<br>";
        }

        function modificarNumFilhos ($numFilhos) {
            // alterar um atributo do objeto
            $this->numFilhos = $numFilhos;
            
        }
        
    }

    //Instanciando o objeto
    $y = new Funcionario();
    $y->__set('nome', 'José');
    $y->__set('telefone', '+55 11 3333-2222');
    $y->__set('numFilhos', 2);

    echo $y->resumirCadastro();
    //echo $y->__get('nome') . " possui " . $y->__get('numFilhos') . " filho(s) <br>";

    //Instanciando o objeto
    $x = new Funcionario();
    $x->__set('nome', 'Nicollas');
    $x->__set('telefone', '+55 11 4022-8922');
    $x->__set('numFilhos', 0);

    echo $x->resumirCadastro();


    ?>

</body>
</html>