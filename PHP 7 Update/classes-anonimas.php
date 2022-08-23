<?php

// Classes anônimas

interface Logger
{
    public function log(string $msg);
}

class App
{
    private $logger;

    public function getLogger():Logger
    {
        return $this->logger;
    }

    public function setLogger(Logger $logger)
    {
        $this->logger = $logger;
    }
}

$app = new App;
$app->setLogger(new class implements Logger { // Classe anonima
    public function log(string $msg)
    {
        echo $msg;
    }
});