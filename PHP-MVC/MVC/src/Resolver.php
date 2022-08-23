<?php 

namespace Core;

class Resolver
{
    public function handler(string $class, string $method)
    {
        $instance = null;
        $ref = new \ReflectionClass($class);

        $constructor = $ref->getConstructor();

        if (!$constructor) {
            $instance = $ref->newInstance();
        }

        $parameters = $this->methodResolver($ref, $constructor);

        $instance = $ref->newInstanceArgs($parameters);

        if (!$method) {
            return $instance;
        }

        $ref_method = new \ReflectionMethod($instance, $method);
        $parameters = $this->methodResolver($ref, $ref_method);

        call_user_func_array([$instance, $method], $parameters);

        
    }

    private function methodResolver($ref, $method)
    {
        $parameters = [];
        foreach ($method->getParameter() as $param) {
            
            if ($param->getClass()){
                $parameters[] = $this->handler($param->getClass()->getName());
                continue;
            }

        }
    }
}