<?php

namespace SON\State;

class OpenDoorState extends AbstractDoorState
{
    /**
     * @return ClosedDoorState
     */
    public function close()
    {
        return new ClosedDoorState;
    }
}
