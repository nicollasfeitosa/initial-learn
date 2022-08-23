<?php

namespace SON\State;

interface DoorState
{
    public function open();
    public function close();
    public function lock();
    public function unlock();
}
