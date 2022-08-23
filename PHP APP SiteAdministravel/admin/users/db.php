<?php

function users_get_data ($redirectOnError){
    $user = filter_input(INPUT_POST, 'user');
    $email = filter_input(INPUT_POST, 'email');
    $password = filter_input(INPUT_POST, 'password');

    if(empty($user) or empty($email)){
        flash('Informe os campos de email e user', 'error');
        header('location: '. $redirectOnError);
        die();
    }

    return compact( 'user', 'email', 'password');
};


// funções anonimas
$users_all = function () use ($conn){
    $result = $conn->query('SELECT * FROM users');
    return $result->fetch_all(MYSQLI_ASSOC);
};

$users_view = function ($id) use ($conn){
    $stmt = $conn->prepare('SELECT * FROM users WHERE idusers=?');
    $stmt->bind_param('i', $id);

    $stmt->execute();

    $result = $stmt->get_result();

    return $result->fetch_assoc();

};

$users_create = function () use ($conn){
    $data = users_get_data('/admin/users/create');

    $sql = 'INSERT INTO users (user, email, password, created, updated) VALUES (?, ?, ?, NOW(), NOW())';

    if (is_null($data['password'])) {
        flash('Informe o campo de senha', 'error');
        header('location: /admin/users/create');
        die();
    }

    $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

    $stmt = $conn->prepare($sql);
    $stmt->bind_param('sss', $data['user'], $data['email'], $data['password']);

    flash('Usuario salvo com sucesso', 'success');

    return $stmt->execute();
};

$users_edit = function ($id) use ($conn){
    $data = users_get_data('/admin/users/' . $id . '/edit');
    $sql = 'UPDATE users set user=?, email=?, updated=NOW() WHERE idusers=?';

    if($data['password']){
        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
        $sql = 'UPDATE users set user=?, email=?, password=?, updated=NOW() WHERE idusers=?';
    } 

    $stmt = $conn->prepare($sql);

    if ($data['password']) {
        $stmt->bind_param('sssi', $data['user'], $data['email'], $data['password'], $id);
    } else {
        $stmt->bind_param('ssi', $data['user'], $data['email'], $id);
    }

    flash('Usuario atualizado com sucesso', 'success');

    return $stmt->execute();
};

$users_delete = function ($id) use ($conn){
    $sql = 'DELETE FROM users WHERE idusers=?';

    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $id);

    flash('Removido com sucesso!', 'success');

    return $stmt->execute();
};