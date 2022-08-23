<?php 

namespace NicollasDEV\QueryBuilder;

class Sql implements Strategy
{
    protected $table;
    protected $sql;

    public function table(string $table) : Strategy
    {
        $this->table = $table;
        return $this;
    }

    public function select($collums = '*') : Strategy
    {
        if (is_array($collums)) {
            $collums = implode(', ', $collums);
        }

        $this->sql = sprintf('SELECT %s FROM %s;', $collums, $this->table);
        return $this;
    }

    public function getQuery() : string
    {
        return $this->sql;
    }
}