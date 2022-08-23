<?php


namespace NicollasF\People;

class Person
{
    private $data = [];

    public function setName(string $name) 
    {  // Type Hitting é tipar os dados
        $this->data[] = $name;
    }

    public function setAge(int $age) 
    {
        $this->data[] = $age;
    }

    public function setWeight(float $weight) 
    {
        $this->data[] = $weight;
    }
}