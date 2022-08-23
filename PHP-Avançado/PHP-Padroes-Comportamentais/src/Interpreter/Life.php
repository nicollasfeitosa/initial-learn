<?php

namespace SON\Interpreter;

class Life implements Interpreter
{
    private $fr;
    private $con;
    private $level;

    public function __construct(Interpreter $fr, Interpreter $con, Interpreter $level)
    {
        $this->fr = $fr;
        $this->con = $con;
        $this->level = $level;
    }

    public function interpret(int $mod = 0)
    {
        $result = $this->fr->interpret() + $this->con->interpret();
        $result = $result / 2;
        return ceil($result) + $this->level->interpret() + $mod;
    }
}
