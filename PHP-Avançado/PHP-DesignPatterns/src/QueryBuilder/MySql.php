<?php 

namespace NicollasDEV\QueryBuilder;

class MySql implements Strategy
{
    public function table(string $table) : Strategy
    {
        $this->table = '`'.$table.'`'; // O sinal de crase `` permite colocar qualquer nome na tabela ate os protegidos
        return $this;
    }

    public function select($collums = '*') : Strategy
    {
        if ($collums != '*' and is_string($collums)) {
            $collums = explode(',', $collums);
            $collums = array_map('trim', $collums);
        }

        if (is_array($collums)) {
            $collums = implode('`, `', $collums);
            $collums = '`'.$collums.'`';
        }

        $this->sql = sprintf('SELECT %s FROM %s;', $collums, $this->table);
        return $this;
    }

    public function getQuery() : string
    {
        return $this->sql;
    }
}