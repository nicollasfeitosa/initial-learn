<?php 

namespace NicollasDEV\AbstractFactory;

class LivroNodeJS implements AbstractEditoraB 
{
    public function getTitle(): string
    {
        return 'NodeJS like a pro';          
    }

    public function getAuthor(): string
    {
        return 'NicollasJS';
    }

    public function getPages(): string
    {
        return '100 páginas';
    }

}