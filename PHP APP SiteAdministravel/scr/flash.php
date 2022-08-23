<?php

function flash($message = null, $type = null){
    if ($message) {
        // Guarda a mensagem
        $_SESSION['flash'][] = compact('message', 'type');

    } else {
        // Mostra a mensagem
        $flash = $_SESSION['flash'] ?? [];

        if (!count($flash)) {
            return;
        }

        foreach($flash as $key => $message) {
            render('flash', 'ajax', $message);
            unset($_SESSION['flash'][$key]);
        }
    }
}

/*

    Compact faz a mesma coisa que um array:
    array(
        'message' => $message,
        'type' => $type
    )

*/