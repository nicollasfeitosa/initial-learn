<?php 

namespace NicollasDEV\Bridge;

class LowerImplementor implements Implementor
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
        return strtolower($this->title);
    }

    public function showAuthor(): string
    {
        return strtolower($this->author);
    }

}