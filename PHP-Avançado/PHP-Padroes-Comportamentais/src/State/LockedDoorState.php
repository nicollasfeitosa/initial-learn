<?php

namespace SON\State;

class LockedDoorState extends AbstractDoorState
{
    /**
     * @return ClosedDoorState
     */
    public function unlock()
    {
        return new ClosedDoorState;
    }
}
