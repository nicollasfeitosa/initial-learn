<?php

namespace SON\Interpreter;

class Constitution implements Interpreter
{
    public $value;

    public function __construct(int $value)
    {
        $this->value = $value;
    }

    public function interpret(int $mod = 0)
    {
        return $this->value + $mod;
    }
}
