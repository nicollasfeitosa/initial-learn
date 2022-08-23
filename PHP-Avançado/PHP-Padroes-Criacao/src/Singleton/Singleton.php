<?php 

namespace NicollasDEV\Singleton;

class Singleton
{
    protected static $instance;

    protected function __construct() {}
    protected function __clone() {}

    public function getInstance()
    {
        if (self::$instance == null) {
            self::$instance = new ConcreteClass;
        }
        return self::$instance;
    }
}