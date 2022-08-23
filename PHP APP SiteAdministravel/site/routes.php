<?php

require __DIR__ . '/../admin/pages/db.php';

if (resolve('/contato')) {

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $from = filter_input(INPUT_POST, 'from');
        $subject = filter_input(INPUT_POST, 'subjetc');
        $message = filter_input(INPUT_POST, 'message');
        $headers = 'From: ' . $from . "\r\n" . 'Reply-To: ' . $from . "\r\n" . 'X-mailer: PHP/' . phpversion();

        if (mail('contato@nicollasfeitosa.com', $subject, $message, $headers)) {
            flash('Email enviado com sucesso!', 'success');
        } else {
            flash('Algo deu errado =/', 'error');
        }
        return header('location: /contato');
    } 

    $pages = $pages_all();
    render('site/contato', 'site', compact('pages'));
    
} elseif ($params = resolve('/(.*)')) {
    $pages = $pages_all();
    foreach ($pages as $page) {
        if ($page['url'] == $params[1]) {
            break;
        }
    }
    render('site/page', 'site', compact('pages', 'page'));
    
} 