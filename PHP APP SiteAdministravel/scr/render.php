<?php

/* Sistema de Renderização de Templates */
function render($content, $template, array $data = []) {
    $content = __DIR__.'/../templates/'. $content . '.tpl.php';

    return require __DIR__.'/../templates/'. $template . '.tpl.php';
}