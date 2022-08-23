<?php 

namespace NicollasDEV\AbstractFactory;

class LivroMySQL implements AbstractEditoraA
{
    public function getTitle(): string
    {
        return 'MySQL essencial';
    }

    public function getAuthor(): string
    {
        return 'Nicollas O Escritor';
    }

}