<?php

declare (strict_types=1); // Exige a declaração de tipos

$php7 = function(String $title) :array{
    return [
        $title."\n",
        "PHP on another level",
        "More performance",
        "2x faster"
    ];
};

foreach ($php7("News in PHP 7") as $p){
    echo $p."\n";
}