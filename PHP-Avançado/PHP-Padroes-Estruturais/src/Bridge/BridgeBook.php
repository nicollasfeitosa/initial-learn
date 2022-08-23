<?php 

namespace NicollasDEV\Bridge;

abstract class BridgeBook
{
    public function __construct(string $author, string $title, string $implementor)
    {
        $this->implementor = new $implementor($author, $title);

        if (!is_a($this->implementor, 'NicollasDEV\Bridge\Implementor')) {
            throw new \Exception('Deu zebra');
        }
    }

    public abstract function get(): string;
}