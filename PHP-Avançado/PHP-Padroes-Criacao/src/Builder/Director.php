<?php 

namespace NicollasDEV\Builder;

class Director
{
    public function __construct(BuilderInterface $builder)
    {
        $this->builder = $builder;
    }

    public function getQuery($table)
    {
        $this->builder->setTable($table);
        $this->builder->setQuery();

        return $this->builder->getResult();
    }
}