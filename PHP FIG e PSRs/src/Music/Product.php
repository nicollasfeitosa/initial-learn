<?php

namespace NICK\Music;

use NICK\Product as Type;

class Product implements Type
{
    public function getTitle()
    {
        return 'Piano digital';
    }
}
