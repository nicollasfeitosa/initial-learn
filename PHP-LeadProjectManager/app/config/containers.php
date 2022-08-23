<?php

$container['events'] = function () {
    return new Zend\EventManager\EventManager;
};

// $container['httpErrorHandler'] = function () {
//     return 'Error 404';
// };

$container['db'] = function () {
    $dsn = 'mysql:host=localhost;dbname=leadprojectmanager';
    $username = 'root';
    $password = '123456';
    $options = [
        \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
    ];

    $pdo = new \PDO($dsn, $username, $password, $options);

    $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

    return $pdo;
};