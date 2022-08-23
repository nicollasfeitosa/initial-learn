<?php

namespace SON\ChainOfResponsibility;

class Request extends Handler
{
    protected function execute()
    {
        var_dump('requisição');
    }
}
