<?php

require __DIR__.'/../vendor/autoload.php';

use NicollasDEV\Prototype\ConcretePrototype;

$original = new ConcretePrototype;

$original->setTitle('PHP os melhores');
$original->setAuthor('Nicollau Programmer');

var_dump($original);

$clone1 = clone $original;

$clone1->setTitle('Nodejs para noobs');

var_dump($clone1);

$clone2 = clone $original;

$clone2->setTitle('MongoloideDB');

var_dump($clone2);

$clone3 = clone $original;

$clone3->setTitle('Laravel para dodois');

var_dump($clone3);




