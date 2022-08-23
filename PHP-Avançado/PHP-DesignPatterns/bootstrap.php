<?php

require __DIR__.'/vendor/autoload.php';

$builder = new NicollasDEV\Builder\SqlBuilder;
$director = new NicollasDEV\Builder\UsersDirector($builder);

$config = [
    'dsn' => 'mysql:host=localhost;dbname=leadprojectmanager',
    'user' => 'root', 
    'password' => '123456'
];

NicollasDEV\DbSingleton::configure($config);
