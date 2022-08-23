<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Métodos Estaticos</title>
</head>
<body>
    <?php // Script PHP

    // Métodos Estaticos
    class Exemplo {
        public static $atributo1 = 'Atributo estaico';
        public $atributo2 = 'Atributo normal';

        public static function metodo1(){
            // Também não podemos utilizar o operador $this
            // Caso o objeto não seja instanciado primeiro 
            // Sendo acessado pelo operador Exemplo::metodo1();
            echo 'Método estático';
        }

        public function metodo2(){
            echo 'Método Normail';
        }
    }

    // Como os atributos e metodos são estaticos Não há necessidade de instanciar objetos
    // como por exemplo: $teste = new Exemplo();
    echo Exemplo::$atributo1;
    echo Exemplo::metodo1();

    // testes
    $teste = new Exemplo();
    //echo $x->atributo1; // causa erro pois o token -> (seta) não é possivel ser utilizado juntamente com atributos estaticos

    // Também não podemos utilizar o operador $this

    // Exemplo de erro com métodos não estaticos
    //echo Exemplo::$atributo2; // causa erro
    //echo Exemplo::metodo2(); // não causava erro nas versões antigas

    ?>

</body>
</html>