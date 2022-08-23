<?php 

require __DIR__.'/../vendor/autoload.php';

use NicollasDEV\Bridge\BookAuthorTitle;
use NicollasDEV\Bridge\BookTitleAuthor;
use NicollasDEV\Bridge\LowerImplementor;
use NicollasDEV\Bridge\UpperImplementor;

$example1 = new BookAuthorTitle('Nicollau F', 'Programção Avançada', LowerImplementor::class); // UpperImplementor::class Retorna uma String com o nome da classe
var_dump($example1->get());

$example2 = new BookAuthorTitle('Nicollau F', 'Programção Avançada', UpperImplementor::class);
var_dump($example2->get());

$example3 = new BookTitleAuthor('Nicollau F', 'Programção Avançada', LowerImplementor::class); // UpperImplementor::class Retorna uma String com o nome da classe
var_dump($example3->get());

$example4 = new BookTitleAuthor('Nicollau F', 'Programção Avançada', UpperImplementor::class);
var_dump($example4->get());
