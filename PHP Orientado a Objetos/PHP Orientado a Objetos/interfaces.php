<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php // Script PHP

    // Interfaces

    //As interfaces definem quais metodos devem ser construidos nas classes

    // Para criar a interface utilizamos a palavra interface como no exemplo abaixo:
    interface EquipamentoEletronicoInterface {
        // todos os métodos na interface devem ser publicos
        public function ligar();
        public function desligar();
        // as interfaces nao determinam os metodos e sim só os declara nas proximas classes
    }

    //classes - implements é o que implementa a interface com as classes
    class Geladeira implements EquipamentoEletronicoInterface {
        public function abrirPorta(){
            echo 'Abriu a porta';
        }

        public function ligar(){
            echo 'Ligou';
        }

        public function desligar(){
            echo 'Desligou';
        }
    }

    class TV implements EquipamentoEletronicoInterface {
        public function trocarCanal() {
            echo 'Trocou de canal';
        }

        public function ligar(){
            echo 'Ligou';
        }

        public function desligar(){
            echo 'Desligou';
        }
    }

    $geladeira = new Geladeira();
    $tv = new TV();

    




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