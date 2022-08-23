<?php

require __DIR__.'/../vendor/autoload.php';

use SON\ChainOfResponsibility\Handler;
use SON\ChainOfResponsibility\Request;
use SON\ChainOfResponsibility\Before;
use SON\ChainOfResponsibility\After;

$before = new Before();
$request = new Request();
$after = new After();

$auth = new class extends Handler {
    protected function execute()
    {
        var_dump('autenticação');
    }
};

$auth->successor($before);
$before->successor($request);
$request->successor($after);

$auth->handlerRequest();
/*
$next = $auth;

while($next) {
    $next->handlerRequest();
    $next = $next->next();
}*/
