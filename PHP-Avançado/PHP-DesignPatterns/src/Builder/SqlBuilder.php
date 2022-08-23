<?php

namespace NicollasDEV\Builder;

use NicollasDEV\QueryBuilder\Sql;

class SqlBuilder implements BuilderInterface
{
    protected $query;

    public function __construct()
    {
        $this->query = new Sql;
    }

    public function setTable(string $table)
    {
        $this->query->table($table);
    }

    public function getSqlAll() :string
    {
        return $this->query
            ->select()
            ->getQuery();
    }
}
