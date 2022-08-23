<?php 

namespace NicollasDEV\Bridge;

class BookAuthorTitle extends BridgeBook
{
    public function get():string
    {
        return $this->implementor->showAuthor() . ' ' . $this->implementor->showTitle();
    }
}