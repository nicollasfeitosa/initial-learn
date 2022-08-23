<?php 

namespace NicollasDEV\QueryBuilder;

interface Strategy
{
    public function table(string $table) : Strategy;
    public function select($collums = '*') : Strategy;
    public function getQuery() : string;
}
