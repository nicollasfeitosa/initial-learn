<?php

namespace SON\ChainOfResponsibility;

class After extends Handler
{
    protected function execute()
    {
        var_dump('depois');
    }
}
