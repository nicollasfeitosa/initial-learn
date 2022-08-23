<?php

    require "./bibliotecas/lib1/lib1.php";
    require "./bibliotecas/lib2/lib2.php";

    // A importação é valido apenas para classes e interfaces
    // Não é valida para funções ou constantes


    // Usando o use para instanciar um objeto contido em um namespace importado
    use A\Cliente as C1;
    use B\Cliente as C2;

    $c = new C1;

    echo '<pre>';
    print_r($c);
    echo '</pre>';

    echo $c->__get('nome');

?>