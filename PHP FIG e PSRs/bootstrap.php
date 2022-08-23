<?php 

require __DIR__.'/vendor/autoload.php';

use NICK\Computers\Product as Notebook;
use NICK\Music\Product as Piano;
use NICK\Audio\Product as InterfaceSom;
use NICK\ListProduct;

$product = new ListProduct;

$product->addProduct(new Notebook);
$product->addProduct(new Piano);
$product->addProduct(new InterfaceSom);

var_dump($product->getAll());

$logger = new NICK\Logger\Logger(__DIR__.'/logs');
$logger->log('info', 'O user {name} acabou de acessar a aplicação', ['name' => 'Nicollau']);
$logger->log(\Psr\Log\LogLevel::ALERT, 'O site caiu!');
