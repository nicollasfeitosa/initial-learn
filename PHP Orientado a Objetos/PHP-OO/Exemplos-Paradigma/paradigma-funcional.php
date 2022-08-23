<?php

$input = [22, 34, 17, 18, 14, 13, 22, 25];

$filter = function(int $age){
    return ($age >= 18);
};


$output = array_filter($input, $filter);
// entra dados no input e o filter é a função que determina a condição

$output = array_filter($input, function(int $age){
    return ($age >= 18);
});

var_dump ($output);


