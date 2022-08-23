<?php 

namespace NicollasDEV\FactoryMethod;

class Circle implements ProductInterface
{
    private $directory;

    public function setDirectory(string $directory)
    {
        $this->directory = $directory;
    }

    public function getImage()
    {
        return $this->directory . '/circle.png';
    }
}