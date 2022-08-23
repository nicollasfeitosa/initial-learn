<?php

// Array Destructuring

$array = [1, 2, 3];
[$x, $y, $z] = $array;

//list($x, $y, $z) = $array;

$array2 = ['index1' => 'a','index2' => 'b'];
['index1'=> $x, 'index2'=> $y] = $array2;


var_dump($x, $y);