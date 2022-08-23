<?php 

namespace NicollasDEV\Adapter;

class RenderBook
{
    private $book;

    public function __construct(BooksInterface $book)  
    {
        $this->book = $book;
    }

    public function renderTitleAndName()
    {
        return $this->book->getAuthorAndTitle();
    }
}