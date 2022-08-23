<?php

namespace SON\Visitor;

class StringElement extends ElementAbstract
{
    public function validate($value) :bool
    {
        return is_string($value);
    }
}
