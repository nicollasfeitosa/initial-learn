<?php

namespace SON\Command;

//podia implementar uma interface
class LampReceiver
{
    public function turnOn()
    {
        var_dump('Lamps on');
    }

    public function turnOff()
    {
        var_dump('Lamps off');
    }
}
