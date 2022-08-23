<?php

// if ($_REQUEST) {
//     //Executado toda vez que tiver uma requisição
//     echo json_encode(['msg'=>"Teste"]);
//     exit;
// }

if ($_GET) {
    //var_dump($_GET);
    //header("HTTP/1.0 404 Not Found"); // Força um erro
    //echo "<name>{$_GET['name']}</name>";

    //retornando Json
    echo json_encode($_GET);

    exit;
}

if ($_POST) {
    //var_dump($_POST);
    // $_POST['name'] = $_POST['name'] . " DB";
    // $_POST['email'] = $_POST['email'] . " DB";
    // $_POST['tel'] = $_POST['tel'] . " DB";

    $name = $_POST['name'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];

    if ($name == "" || $email == "" || $tel == "") {
        echo json_encode(["status"=> false, "msg"=>"Preencha os campos"]);
        exit;
    }

    $id = save($_POST);

    if ($id) {
        echo json_encode(["status"=> true, "msg"=>"Sucesso id: {$id}"]);
    }else {
        echo json_encode(["status"=> false, "msg"=>"Error DB id: {$id}"]);
    }
}

function conn(){
    $conn = new \PDO("mysql:host=localhost;dbname=ajax_jquery","root","sonic9595");
    return $conn;
}

function save($data){
    $db = conn();
    $query ="Insert into `contacts` (`name`,`email`,`tel`) VALUES (:name,:email,:tel)";
    $stmt = $db->prepare($query);
    $stmt->bindValue(':name',$data['name']);
    $stmt->bindValue(':email',$data['email']);
    $stmt->bindValue(':tel',$data['tel']);
    $stmt->execute();
    
    return $db->lastInsertId();
}

