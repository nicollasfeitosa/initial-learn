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
    interface Mamifero{
        public function respirar();
    }

    interface Terrestre {
        public function andar();
    }

    interface Aquatico {
        public function nadar();
    }

    // Classes
    class Humano implements Mamifero, Terrestre {

        //Metodos obrigatorios imposto pelas interfaces
        public function respirar(){
            echo 'Respirou...';
        }

        public function andar(){
            echo 'Andou...';
        }

        public function conversas(){
            echo 'Conversou';
        }
    }

    class Baleia implements Mamifero, Aquatico {

        //Metodos obrigatorios imposto pelas interfaces
        public function respirar() {
            echo 'Respirar';
        }

        public function nadar() {
            echo 'Nadar';
        }

        protected function esquichar(){
            echo 'Esguichar';
        }
    }

    //=========================================================

    interface AnimalInterface {
        public function comer();
    }

    interface AveInteface extends AnimalInterface {
        public function voar();
    }

    class Papagaio implements AveInteface {

        //Metodos obrigatorios imposto pelas interfaces
        public function voar() {
            echo 'voar';
        }

        public function comer(){
            echo 'comeu';
        }
    }


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