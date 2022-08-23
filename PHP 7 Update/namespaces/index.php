<?php 

// Declaração de namespaces

require_once __DIR__."/vendor/autoload.php";

// Método Antigo
// use App\ClassA;
// use App\ClassB;
// use App\ClassC as C;

// Método Novo
use App\{ClassA, ClassB, ClassC as C};

$a = new ClassA;
echo $a;

$b = new ClassB;
echo $b;

$c = new C;
echo $c;
