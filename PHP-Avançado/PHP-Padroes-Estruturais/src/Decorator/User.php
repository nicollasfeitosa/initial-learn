<?php 

namespace NicollasDEV\Decorator;

class User implements EntityInterface
{
    private $name;

    public function setName($name) :string
    {
        return $this->name = $name;
    }

    public function getName() :string
    {
        return $this->name;
    }
}