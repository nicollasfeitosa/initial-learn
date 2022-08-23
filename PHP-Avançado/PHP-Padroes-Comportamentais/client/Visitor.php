<?php

require __DIR__.'/../vendor/autoload.php';

use SON\Visitor\StringElement;
use SON\Visitor\UpperCaseVisitor;
use SON\Visitor\LowerCaseVisitor;

$element = new StringElement;
$element->setValue('Erik Figueiredo');
$element->accept(new LowerCaseVisitor);
var_dump($element->getValue());
