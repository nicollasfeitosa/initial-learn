<?php 

namespace NicollasDEV\Solid\Tags;

class Link
{
    public function render(string $href, string $anchor)
    {
        return '<a href="' . $href . '">' . $anchor . '</a>';
    }
}
