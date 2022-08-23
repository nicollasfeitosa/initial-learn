<?php 

require __DIR__.'/../vendor/autoload.php';

use NicollasDEV\Adapter\PHPBook;
use NicollasDEV\Adapter\PHPBookAdapter;
use NicollasDEV\Adapter\RenderBook;

$book = new PHPBookAdapter('O livro de Nicollau', 'Nicollau');

$render = new RenderBook($book);
echo $render->renderTitleAndName();