<?php

$router = new Core\Router;

$router['/'] = [ // Caminho para a rota Path
    'class' => App\Controllers\UsersController::class, // Nome do Controller
    'action' => 'index' // Nome do método
];

$router['/registro'] = [
    'class' => App\Controllers\UsersController::class,
    'action' => 'create'
];

return $router;