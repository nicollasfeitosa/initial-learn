<?php

namespace App;

use MF\Init\Bootstrap;

class Route extends Bootstrap {

    private $routes;

    protected function initRoutes()
    {
        $routes['home'] = array(
            'route' => '/', 
            'controller' => 'indexController', 
            'action' => 'index');

        $routes['sobre'] = array(
            'route' => '/sobre', 
            'controller' => 'indexController', 
            'action' => 'sobre');

        $this->setRoutes($routes);
    }


}