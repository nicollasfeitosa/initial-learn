<?php 

namespace NicollasDEV\AbstractFactory;

class EditoraA implements AbstractFactory
{
    private $linguagem;
    private $banco;

    public function __construct()
    {
        $this->linguagem = new LivroPHP;
        $this->banco = new LivroMySQL;
    }

    public function makeLivroLinguagem()
    {
        $this->linguagem->setTitle('Livro PHP foda');
        $this->linguagem->setAuthor('Nicollas Feitosa Top');
        
        return $this->linguagem;
    }

    public function makeLivroBanco()
    {
        return $this->banco;
    }

}
