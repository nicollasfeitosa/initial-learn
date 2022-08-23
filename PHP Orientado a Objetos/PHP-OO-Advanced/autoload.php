<?php

require __DIR__.'/scr/Autoload.php';

$autoload = new NicollasF\Autoload;
$autoload->register();

// Nome do Namespace (Fornecedor) / Pasta que se encontra as Classes
$autoload->addNamespace('NicollasF', 'scr');