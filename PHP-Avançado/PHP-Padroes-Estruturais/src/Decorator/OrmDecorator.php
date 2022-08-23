<?php 

namespace NicollasDEV\Decorator;

class OrmDecorator implements DecoratorInterface
{
    protected $entity;

    public function setEntity(EntityInterface $entity)
    {
        $this->entity = $entity;
    }

    public function operation() :string
    {
        return $this->entity->getName() . ' - ORM finded in database';
    }
}