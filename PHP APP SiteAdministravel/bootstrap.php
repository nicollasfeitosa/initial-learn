<?php

session_start();

require __DIR__.'/config.php';
require __DIR__.'/scr/error_handler.php';
require __DIR__.'/scr/resolve-route.php';
require __DIR__.'/scr/render.php';
require __DIR__.'/scr/connection.php';
require __DIR__.'/scr/flash.php';
require __DIR__.'/scr/auth.php';

/* Resolve de Rotas de URL Amigáveis */
if (resolve('/admin/?(.*)')) {
    require __DIR__ . '/admin/routes.php';

} elseif (resolve('/(.*)')) {
    require __DIR__.'/site/routes.php';

}

