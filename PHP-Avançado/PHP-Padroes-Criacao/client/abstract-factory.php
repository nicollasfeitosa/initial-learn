<?php 

require __DIR__.'/../vendor/autoload.php';

$abstractFactory = new \NicollasDEV\AbstractFactory\EditoraA;

$livro_php = $abstractFactory->makeLivroLinguagem();

echo $livro_php->getTitle();
echo PHP_EOL;
echo $livro_php->getAuthor();