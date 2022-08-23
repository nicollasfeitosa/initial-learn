<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Pilar da Abstração</title>
</head>
<body>
    <?php // Script PHP

    // Abstração do objeto pessoa

    class Pessoa {
        public $nome = null;
        public $rg = null;
        
        // Quando é instanciado a função construct é utilizada automaticamente
        // Ou seja podemos determinar valores iniciais logo apos o objeto ser instanciado!
        function __construct($nome) {
            echo "Objeto inicado <br/>";
            $this->nome = $nome;
        }

        // funçao destruct o que acontece quando essa instancia é deletada
        function __destruct(){
            echo 'Objeto removido';
        }

        //método GET
        function __get($atributo) {
            return $this->$atributo;
        }

        //funçòes ou metodos
        function correr(){
            return $this->__get('nome').' está correndo!';
        }
    }

    // Processo de Instanciamento
    $pessoa = new Pessoa("Nicollas");
    echo 'Nome da pessoa: '.$pessoa->__get('nome').'<br/>';
    echo $pessoa->correr();

    //Para forçar a remoção de uma instancia
    echo '<br>';
    unset($pessoa);

    ?>

</body>
</html>