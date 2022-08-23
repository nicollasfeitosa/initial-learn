<?php

function pages_get_data($redirectOnError) {
    $title = filter_input(INPUT_POST, 'title');
    $url = filter_input(INPUT_POST, 'url');
    $body = filter_input(INPUT_POST, 'body');

    if((!$title)){
        flash('Informe os campos de título', 'error');
        header('location: '. $redirectOnError);
        die();
    }

    return compact('title', 'body', 'url');
}

// Funções Anonimas
$pages_all = function() use ($conn) { 
    // buscar todas as paginas
    $result = $conn->query('SELECT * FROM pages');
    return $result->fetch_all(MYSQLI_ASSOC);
};

$pages_one = function($id) use ($conn) { 
    // buscar uma unica página
    $sql = 'SELECT * FROM pages WHERE idpages=?';

    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $id);
    $stmt->execute();

    $result = $stmt->get_result();
    return $result->fetch_assoc();
};

$pages_create = function() use ($conn) { 
    // cadastra uma página
    $data = pages_get_data('/admin/pages/create');

    $sql = 'INSERT INTO pages (title, body, url, updated, created) VALUES (?, ?, ?, NOW(), NOW())';

    $stmt = $conn->prepare($sql);
    $stmt->bind_param('sss', $data['title'], $data['body'], $data['url']);

    // Flash é a mensagem do alerta que sera exibido
    flash('Criou registro com sucesso!', 'success');

    return $stmt->execute();
};

$pages_edit = function($id) use ($conn) { 
    // atualiza uma página
    $data = pages_get_data('/admin/pages/' . $id . '/edit');

    $sql = 'UPDATE pages SET title=?, body=?, url=?, updated=NOW() WHERE idpages=?';

    $stmt = $conn->prepare($sql);
    $stmt->bind_param('sssi', $data['title'], $data['body'], $data['url'], $id);

    flash('Atualizou registro com sucesso!', 'success');

    return $stmt->execute();
};

$pages_delete = function($id) use ($conn) { 
    // remove uma página

    $sql = 'DELETE FROM pages WHERE idpages=?';

    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $id);

    flash('Removeu registro com sucesso!', 'success');

    return $stmt->execute();
};