<?php

require __DIR__.'/../vendor/autoload.php';

use SON\Iterator\MyIterator;
use SON\Iterator\MyIteratorTwo;

$data = [
    "firstelement",
    "secondelement",
    "lastelement",
];

$iterator = new MyIterator($data); //com dump dos nomes dos metodos
$iterator_2 = new MyIteratorTwo($data); //sem dump dos nomes dos metodos

/*foreach($iterator_2 as $key => $value) {
    var_dump($key, $value);
    echo "\n";
}*/

while ($iterator_2->valid()) {
    var_dump($iterator_2->current());
    $iterator_2->next();
}
