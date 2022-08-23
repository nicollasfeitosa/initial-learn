<?php 

namespace NicollasDEV\Builder;

class Product
{
    public $table;
    public $query;

    const MYSQL_QUERY = 'SELECT * FROM `%s`';
    const POSTGRES_QUERY = 'SELECT * FROM %s';

    public function getQuery()
    {
        return sprintf($this->query, $this->table);
    }
}

