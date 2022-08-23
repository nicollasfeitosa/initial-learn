<?php 

namespace NicollasDEV\Solid;

class Html
{
    public function __call(string $name, array $arguments)
    {
        $class = '\NicollasDEV\Solid\Tags\\' . ucfirst($name);
        return call_user_func_array([new $class, 'render'], $arguments);
    }
}
