<?php

namespace SON\Strategy;

interface Storage
{
    public function persist(array $data) :bool;
}
