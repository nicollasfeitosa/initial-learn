<?php 

namespace NicollasDEV\AbstractFactory;

class LivroMongoDB implements AbstractEditoraB
{
    public function getTitle(): string
    {
        return 'Mongo DB';          
    }

    public function getAuthor(): string
    {
        return 'Nicollas Mongo';
    }

    public function getPages(): string
    {
        return '300 páginas';
    }

}