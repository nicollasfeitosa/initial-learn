<?php

require __DIR__.'/../vendor/autoload.php';

$fr = new SON\Interpreter\Force(14);
$con = new SON\Interpreter\Constitution(13);
$level = new SON\Interpreter\Level(2);

// $life = (fr + con) / 2 + level - arredondar para cima
$life = new SON\Interpreter\Life($fr, $con, $level);
var_dump($life->interpret());
var_dump($life->interpret(2));
