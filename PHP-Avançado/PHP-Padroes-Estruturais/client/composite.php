<?php 

require __DIR__.'/../vendor/autoload.php';

use NicollasDEV\Composite\PHPCategory;
use NicollasDEV\Composite\SolidCategory;
use NicollasDEV\Composite\FrameworksCategory;
use NicollasDEV\Composite\LaravelCategory;

$php = new PHPCategory;
$solid = new SolidCategory;
$frameworks = new FrameworksCategory;
$laravel = new LaravelCategory;

$solid->addCategory($laravel);
$php->addCategory($frameworks);
$php->addCategory($solid);


function categoriesList($category) {
    $i = 0;

    while ($category->getCategory($i) !== null) {
        $cat = $category->getCategory($i);
        if ($cat->getCategory(0) !== null) {
            categoriesList($cat);
        }
        echo $category->getName();
        echo PHP_EOL;
        
        $i++;
    }
}

categoriesList($php);


