<?php 

namespace NicollasDEV\Bridge;

class UpperImplementor implements Implementor
{
    private $author;
    private $title;

    public function __construct(string $author, string $title)
    {
        $this->author = $author;
        $this->title = $title;
    }

    public function showTitle(): string
    {
        return strtoupper($this->title);
    }

    public function showAuthor(): string
    {
        return strtoupper($this->author);
    }

}