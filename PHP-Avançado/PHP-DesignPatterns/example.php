<?php

require __DIR__.'/vendor/autoload.php';

use NicollasDEV\Builder\UsersDirector;


$builder = new NicollasDEV\Builder\SqlBuilder;
$director = new NicollasDEV\Builder\UsersDirector($builder);

// $sql = $director->getSqlAll();

// $banks = new App\Model\Banks($builder);

// $sql = $banks->getSqlAll();

// var_dump($sql);

// $pdo = new \PDO('mysql:host=localhost;dbname=leadprojectmanager', 'root', '123456');

// $db = new NicollasDEV\Db($pdo);
// $db->setDirector($director);

// $data = $db->getAll()
//     ->execute();

$config = [
    'dsn' => 'mysql:host=localhost;dbname=leadprojectmanager',
    'user' => 'root', 
    'password' => '123456'
];

NicollasDEV\DbSingleton::configure($config);
$db = NicollasDEV\DbSingleton::getInstance();

$db->setDirector($director);

$data = $db->getAll()
    ->execute();

var_dump($data->fetchAll());