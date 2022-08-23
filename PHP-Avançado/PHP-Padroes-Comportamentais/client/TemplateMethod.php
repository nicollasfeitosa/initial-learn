<?php

require __DIR__.'/../vendor/autoload.php';

use SON\TemplateMethod\DiscountOrder;
use SON\TemplateMethod\IncreaseOrder;

$value = 190;
$changeValue = 20;

$result = (new DiscountOrder)->finalValue($value, 40, $changeValue);
var_dump($result);

$result = (new IncreaseOrder)->finalValue($value, 40, $changeValue);
var_dump($result);
