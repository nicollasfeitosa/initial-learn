<?php 

namespace Core;

class Controller
{
    protected $model;

    protected function render(array $data = [], string $view = null)
    {
        if (!$view) {
            $view = $this->controllerName() . '/' . debug_backtrace()[1]['function'];
        }
        extract($data);
        require __DIR__.'/../templates/'.$view.'.tpl.php';
    }

    private function controllerName()
    {
        $class = get_class($this); // App\Controllers\UsersController
        $class = explode('\\', $class); // App, Controllers, UsersController
        $class = array_pop($class); // UsersController
        $class = preg_replace('/Controller$/', '', $class); // Users
        return strtolower($class); // users
    }
}
