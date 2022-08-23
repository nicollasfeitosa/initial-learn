<?php

auth_protection();

if (resolve('/admin')) {
    render('admin/home', 'admin');

} elseif (resolve('/admin/auth.*')) {
    require __DIR__.'/auth/routes.php';
    
} elseif (resolve('/admin/pages.*')) {
    require __DIR__.'/pages/routes.php';
    
}   elseif (resolve('/admin/users.*')) {
    require __DIR__.'/users/routes.php';
    
} elseif (resolve('/admin/upload.image')) {
    $file = $_FILES['file'] ?? null;

    if (!$file){
        http_response_code(422);
        echo 'nenhum arquivo encontrado';
        exit;
    }

    $allowedTypes = [
        'image/gif',
        'image/jpeg',
        'image/jpg',
        'image/png',
    ];

    if(!in_array($file['type'], $allowedTypes)) {
        http_response_code(422);
        echo 'arquivo não permitido';
        exit;
    }

    $name = uniqid(rand(), true) . '.' . pathinfo($file['name'], PATHINFO_EXTENSION);

    move_uploaded_file($file['tmp_name'], __DIR__.'/../public/upload/' . $name);

    echo '/upload/' . $name;
    
} else {
    http_response_code(404);
    echo 'Pagina não encontrada';
}