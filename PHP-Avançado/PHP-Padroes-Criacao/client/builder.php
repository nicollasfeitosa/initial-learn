<?php 

require __DIR__.'/../vendor/autoload.php';

$mysql = new \NicollasDEV\Builder\MySqlBuilder;
//$mysql = new \NicollasDEV\Builder\PostgresBuilder;

$result = (new \NicollasDEV\Builder\Director($mysql))->getQuery('users');

var_dump($result->getQuery());