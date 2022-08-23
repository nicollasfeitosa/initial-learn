<?php

namespace SON\ChainOfResponsibility;

abstract class Handler
{
    private $successor;

    protected abstract function execute();

    public function handlerRequest()
    {
        $this->execute();

        if ($this->successor) {
            $this->successor->handlerRequest();
        }
    }

    //opcional
    public function successor(Handler $successor)
    {
        $this->successor = $successor;
    }

    //minha implementação
    public function next()
    {
        return $this->successor;
    }
}
