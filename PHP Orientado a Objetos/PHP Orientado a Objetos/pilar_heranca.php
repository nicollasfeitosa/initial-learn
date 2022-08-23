<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Pilar da Abstração</title>
</head>
<body>
    <?php // Script PHP

    // Modelo da abstração de um Carro
    class Carro extends Veiculo{
        public $teto_solar = true;

        // Metodo construtor
        function __construct($placa, $cor){
            $this->placa = $placa;
            $this->cor = $cor;
        }

        //metodos
        function abrirTetoSolar(){
            echo 'AbrirTetoSolar <br>';
        }

        function alterarPosicaoVolante(){
            echo 'Alterar posição volante <br>';
        }
    }

    // Modelo de abstração de moto
    class Moto extends Veiculo{
        public $contraPesoGuidao = true;

        // Metodo construtor
        function __construct($placa, $cor){
            $this->placa = $placa;
            $this->cor = $cor;
        }

        //metodos

        function empinar(){
            echo 'Empinar <br>';
        }
    }

    class Veiculo {
        public $placa = null;
        public $cor = null;

        function acelerar(){
            echo 'Acelerar <br>';
        }

        function freiar(){
            echo 'Freiou <br>';
        }
    }

    $carro = new Carro('ABC1234', 'Vermelho Tesla');
    $moto = new Moto('XYZ9876', 'Amarelo Ovo');

    $carro->abrirTetoSolar();
    $carro->acelerar();
    $carro->freiar();

    echo '<hr>';

    $moto->empinar();
    $moto->acelerar();
    $moto->freiar();


    //Debug 
    echo '<hr>';

    debugArray($carro);
    debugArray($moto);

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