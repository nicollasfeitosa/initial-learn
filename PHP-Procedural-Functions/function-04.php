<?php

// Retorno

function executarTeste($nota, $media = 5){
    if ($nota >= $media) {
        return "Aprovado";
    } else {
        return "Reprovado";
    }
}

echo "<h1>Exame de alunos</h1>";

$resultado = executarTeste(5);

echo "Resultado do Aluno: $resultado";






// function abc() {
//     return "123";
// }

// $valor = abc();

// echo $valor;

