<?php

namespace SON\Strategy;

class LocalStorage implements Storage
{
    private $dir;

    public function __construct($dir)
    {
        $this->dir = $dir;
    }

    public function persist(array $data) :bool
    {
        var_dump('salvo no diretório ' . $this->dir);
        return true;
    }
}
