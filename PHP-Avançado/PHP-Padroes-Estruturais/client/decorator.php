<?php 

require __DIR__.'/../vendor/autoload.php';

use NicollasDEV\Decorator\User;
use NicollasDEV\Decorator\MigrationDecorator;
use NicollasDEV\Decorator\OrmDecorator;

$user = new User;
$user->setName('Nicolau');

$orm = new OrmDecorator;
$orm->setEntity($user);
$result = $orm->operation();
var_dump($result);

$migration = new MigrationDecorator;

$migration->setEntity($user);
$result2 = $migration->operation();
var_dump($result2);