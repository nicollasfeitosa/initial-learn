<?php

//exemplo base https://github.com/domnikl/DesignPatternsPHP/tree/master/Behavioral/Mediator

require __DIR__.'/../vendor/autoload.php';

use SON\Mediator\ClientColleague as Client;
use SON\Mediator\DatabaseColleague as Database;
use SON\Mediator\ServerColleague as Server;
use SON\Mediator\Mediator;

$client = new Client();
new Mediator($client, new Server(), new Database());

echo $client->request();
