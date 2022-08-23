<?php

require __DIR__.'/../vendor/autoload.php';

use SON\Strategy\DatabaseStorage;
use SON\Strategy\LocalStorage;
use SON\Strategy\LoggerContext;

$db = new DatabaseStorage;
$local = new LocalStorage(__DIR__);

(new LoggerContext($local))->setLog('Erro 404 na url ...', 'danger');
