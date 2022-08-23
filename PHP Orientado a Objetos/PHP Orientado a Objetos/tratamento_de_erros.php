<?php

//tenha uma logica

try {
    //tenha uma logica onde passa ocorrer um potencial erro (excessão)
    echo '<h3> Try </h3>';

    //forçar o lançamento de um erro
    //$sql = 'Select * from clientes';
    //mysql_query($sql); //erro

    if (!file_exists('require_arquivo_a.php')) { // se existe true se nao false
        // criamos um objeto do tipo excessão 
        throw new Exception('O arquivo em questão deveria estar disponivel as ' . date('d/m/Y H:i:s') .  ' horas mas não estava! vamos seguir mesmo assim');
        // Estamos prevendo esse erro e capturando essa exeção para tomar alguma tratativa futura 
    }

}   catch(Error $e) {
    //a variavel com a palavra reservada Error recebe a msg de Erro
    echo '<h3> Catch Error </h3>';
    echo "<p style=color:red> $e </p>"; 
    //armazenando esses erros em banco de dados

}   catch(Exception $e) {
    //a variavel com a palavra reservada Exception recebe o objeto de Exceção
    echo '<h3> Catch Exception </h3>';
    echo "<p style=color:red> $e </p>"; 
    //armazenando esses erros em banco de dados

}   finally { 
    echo '<h3> Finally </h3>';
}

echo 'End of page';

?>