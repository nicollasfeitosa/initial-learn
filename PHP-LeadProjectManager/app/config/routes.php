<?php 

use App\Models\Users;

$router->add('/', 'GET', function () use ($container) {
    return 'Estamos na homepage';
});

$router->add('/projects', 'GET', function () {
    return 'pagina de projetos';
});

$router->add('/users/(\d+)', 'GET', '\App\Controllers\UsersController::show');