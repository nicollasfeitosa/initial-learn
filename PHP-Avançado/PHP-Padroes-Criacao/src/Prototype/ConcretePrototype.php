<?php 

namespace NicollasDEV\Prototype;

class ConcretePrototype
{
    public $title;
    public $author;
    public $counter;

    public function setTitle(string $title)
    {
        $this->title = $title;
    }

    public function setAuthor(string $author)
    {
        $this->author = $author;
    }

    public function __clone()
    {
        # é chamado sempre no final e executa o objeto no novo clone
        $this->counter++;

        if ($this->counter > 1) { // não pode clonar o clone
            throw new \Exception("Voce esta indo longe demais.....");
        }
    }
}