<?php

namespace SON\Visitor;

class LowerCaseVisitor implements VisitorInterface
{
    public function convert(ElementAbstract $element)
    {
        $value = $element->getValue();
        $element->setValue(strtolower($value));
    }
}
