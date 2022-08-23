<?php

namespace SON\Visitor;

abstract class ElementAbstract
{
    protected $value;

    public abstract function validate($value) :bool;

    public function setValue($value)
    {
        if (!$this->validate($value)) {
            throw new Exception("Invalid value");
        }
        $this->value = $value;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function accept(VisitorInterface $visitor)
    {
        $visitor->convert($this);
    }
}
