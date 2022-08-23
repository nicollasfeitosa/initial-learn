<?php 

namespace NicollasDEV\Solid\Tags;

class Img
{
    public function render($src)
    {
        return '<img src="'.$src.'"';
    }
}
