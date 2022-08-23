<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Funções</title>
</head>
<body>
    <?php // Script PHP

        // Declaração do Array
        $lista_coisas = []; 
        
        //$lista_coisas['frutas'] = array( 1 => 'Banana', 2 => 'Maça', 3 => 'Morango', 4 => 'Uva');
        $lista_coisas['frutas'] = array( 
            1 => 'Banana', 
            2 => 'Maça', 
            3 => 'Morango', 
            4 => 'Uva');

        //$lista_coisas['pessoas']= array('Bill Gates', 'Steve Jobs', 'Markus Persson');
        $lista_coisas['pessoas']= array(
            'Microsoft' => 'Bill Gates', 
            'Apple' => 'Steve Jobs', 
            'Minecraft' => 'Markus Persson');

        // Recuperando informações dentro de um Array Multidimenssional
        echo $lista_coisas['pessoas']['Minecraft']; // Recuperando o nome Markus Persson
        echo $lista_coisas['frutas'][3]; // Recuperando a fruta Morango
        
        //Debug
        echo '<pre>'; 
            print_r($lista_coisas); 
        echo '</pre>';


    ?>
</body>
</html>