<?php

namespace SON\Mediator;

abstract class Colleague
{
    protected $mediator;

    public function setMediator(MediatorInterface $mediator)
    {
        $this->mediator = $mediator;
        return $this;
    }
}
