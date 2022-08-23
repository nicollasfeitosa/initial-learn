<?php 

namespace NicollasDEV\Singleton;

class ConcreteClass
{
    private $counter = 0;

    public function __construct()
    {
        var_dump('construiu');
    }

    public function __clone()
    {
        var_dump('clonada');
    }

    public function getCounter()
    {
        $this->counter++;
        return $this->counter;
    }
}