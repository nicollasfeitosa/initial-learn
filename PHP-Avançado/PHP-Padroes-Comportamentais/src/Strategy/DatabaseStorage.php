<?php

namespace SON\Strategy;

class DatabaseStorage implements Storage
{
    public function persist(array $data) :bool
    {
        var_dump('salvo no banco de dados');
        return true;
    }
}
