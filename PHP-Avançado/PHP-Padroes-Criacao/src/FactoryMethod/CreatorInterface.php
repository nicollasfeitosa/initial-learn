<?php 

namespace NicollasDEV\FactoryMethod;

interface CreatorInterface
{
    public function factoryMethod(ProductInterface $product): ProductInterface;
}