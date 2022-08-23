<?php

namespace SON\Memento;

class Entity
{
    private $name;

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
}
