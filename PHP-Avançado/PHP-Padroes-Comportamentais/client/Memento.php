<?php

require __DIR__.'/../vendor/autoload.php';

use SON\Memento\Entity;
use SON\Memento\Orm;

$user = new Entity;
$user->setName('Erik');

$orm = new Orm($user);
writeIn($orm->find());

writeIn('Update name');
$orm->save('Figueiredo');
writeIn($orm->find());

writeIn('restore with memento');
$orm->undo();
writeIn($orm->find());

writeIn('remove entity');
$orm->delete();
writeIn($orm->find());

writeIn('restore undo with memento');
$orm->undo();
writeIn($orm->find());

function writeIn(string $text)
{
    echo $text . PHP_EOL;
}
