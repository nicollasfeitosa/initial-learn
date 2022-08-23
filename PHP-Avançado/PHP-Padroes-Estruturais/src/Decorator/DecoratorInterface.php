<?php 

namespace NicollasDEV\Decorator;

// Decorator

interface DecoratorInterface
{
    public function setEntity(EntityInterface $entity);
    public function operation() :string;
}