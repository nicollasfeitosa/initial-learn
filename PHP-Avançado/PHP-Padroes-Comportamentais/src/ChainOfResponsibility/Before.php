<?php

namespace SON\ChainOfResponsibility;

class Before extends Handler
{
    protected function execute()
    {
        var_dump('antes');
    }
}
