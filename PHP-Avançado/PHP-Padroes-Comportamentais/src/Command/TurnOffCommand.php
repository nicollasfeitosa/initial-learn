<?php

namespace SON\Command;

class TurnOffCommand implements Command
{
    public function __construct(LampReceiver $receiver)
    {
        $this->receiver = $receiver;
    }

    public function execute()
    {
        $this->receiver->turnOff();
    }
}
