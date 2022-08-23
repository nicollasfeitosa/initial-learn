<?php 

namespace NicollasDEV\Builder;

class PostgresBuilder implements BuilderInterface
{
    private $queryBuilder;

    public function __construct()
    {
        $this->queryBuilder = new Product;
    }

    public function setTable(string $table)
    {
        $this->queryBuilder->table = $table;
    }

    public function setQuery()
    {
        $this->queryBuilder->query = Product::POSTGRES_QUERY;
    }

    public function getResult(): Product
    {
        return $this->queryBuilder;
    }

}