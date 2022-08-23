<?php

require __DIR__.'/../vendor/autoload.php';

use SON\Command\TurnOnCommand;
use SON\Command\TurnOffCommand;
use SON\Command\LampReceiver;

function invoker(string $commandToExecute) {
    $commands = [
        TurnOnCommand::class,
        TurnOffCommand::class,
    ];

    $similar = 0;
    $finalCommand = null;
    foreach ($commands as $command) {
        similar_text($commandToExecute, $command, $percent);
        //var_dump($commandToExecute, $command, $percent);
        if ($percent > $similar and $percent > 20) {
            $similar = $percent;
            $finalCommand = $command;
        }
    }

    if (!$finalCommand) {
        throw new Exception("Command not found");
    }

    return (new $finalCommand(new LampReceiver))->execute();
}

if (empty($argv[1])) {
    throw new Exception("Command required");
}

try {
    invoker($argv[1]);
} catch (Exception $e) {
    echo $e->getMessage();
}
