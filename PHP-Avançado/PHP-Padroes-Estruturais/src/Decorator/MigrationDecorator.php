<?php 

namespace NicollasDEV\Decorator;

class MigrationDecorator implements DecoratorInterface
{
    protected $entity;

    public function setEntity(EntityInterface $entity)
    {
        $this->entity = $entity;
    }

    public function operation() :string
    {
        return get_class($this->entity). ' - migrated in database';
    }
}