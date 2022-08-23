<?php 

namespace NicollasDEV\Solid\Tags;

class Ul
{
    public function render($content)
    {
        return '<ul>'.$content.'</ul>';
    }
}