<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Loops</title>
</head>
<body>


    <?php // Script PHP

    // Array de registros
    $registros = [
        array('titulo' => 'Titulo noticia 1', 'conteudo' => 'Conteudo da noticia 1'),
        array('titulo' => 'Titulo noticia 2', 'conteudo' => 'Conteudo da noticia 2'),
        array('titulo' => 'Titulo noticia 3', 'conteudo' => 'Conteudo da noticia 3')
    ];

    // Recupera quantos elementos possui dentro do array
    $n_registros = count($registros); 

    // Percorrendo o array com While
    $id = 0; 
    while($id < $n_registros){

        $titulo = $registros[$id]['titulo'];
        $conteudo = $registros[$id]['conteudo'];

        echo "<h1> $titulo </h1>";
        echo "<p> $conteudo </p> <hr/>";

        $id++;
    }

    ?>



</body>
</html>