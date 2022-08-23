<?php

function get_user(){
    return $_SESSION['auth'] ?? null;
}

function auth_protection(){
    $user = get_user();
    
    if(!$user and !resolve('/admin/auth.*')){
        flash('Você deve se logar primeiro!', 'info');
        header('location: /admin/auth/login');
        die();
    }
}

function logout() {
    unset($_SESSION['auth']);
    flash('Você se desconectou com sucesso!','success');
    header('location: /admin/auth/login');
    die();
}