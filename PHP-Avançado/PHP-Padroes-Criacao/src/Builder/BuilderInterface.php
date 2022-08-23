<?php 

namespace NicollasDEV\Builder;

interface BuilderInterface
{
    public function setTable(string $table);
    public function setQuery();
    public function getResult(): Product;
}