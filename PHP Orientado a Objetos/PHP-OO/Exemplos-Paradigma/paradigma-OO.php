<?php

// Exemplo de Orientação a Objetos
// Veja os problemas do cotidiano como Objetos
// Grande vantagem: aproveitamento de código

// Classe é o molde de algo concreto ou a abstração de uma entidade

class People {

    // Métodos são funções dentro de classes
    public function getHello($name){
        return "Hello {$name}!";
    }
}

// Instancia / Cria uma pessoa com base na classe/molde

$p = new People;

echo $p->getHello('Nicollas');
