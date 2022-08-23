<?php

namespace NICK\Computers;

use NICK\Product as Type;

class Product implements Type
{
    public function getTitle()
    {
        return 'Notebook';
    }
}
