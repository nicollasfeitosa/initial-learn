<?php

//Criando a tabela:
$query = 'CREATE TABLE tb_usuarios
(
    id SERIAL NOT NULL PRIMARY KEY,
    nome character varying(50) NOT NULL,
    email character varying(100) NOT NULL,
    senha character varying(32) NOT NULL
)';

$retorno = $conn->exec($query);
echo $retorno;





// Insert de dados
$query = "
insert into tb_usuarios (nome, email, senha) values ('Nicollas2', 'Nicolla2s@teste.com', '12345123667')
";

$retorno = $conn->exec($query);
echo $retorno;





//  Select
$query = "select * from tb_usuarios";

$stmt = $conn->query($query); // o método query retorna um stmt
$lista = $stmt->fetchAll(); // Retorna um array com todos os dados recuperados do banco Associativo e Numérico
//$lista = $stmt->fetchAll(PDO::FETCH_BOTH); // Retorna um array com todos os dados recuperados do banco Associativo e Numérico
//$lista = $stmt->fetchAll(PDO::FETCH_ASSOC); // Retorna um array associativo
//$lista = $stmt->fetchAll(PDO::FETCH_NUM); // Retorna um array numérico
//$lista = $stmt->fetchAll(PDO::FETCH_OBJ); // Retorna um objeto

var_dump($lista);





// Select de um único registro:
$conn = new PDO($dsn, $user, $senha);

$query = "select * from tb_usuarios WHERE id = 8";
$stmt = $conn->query($query); // o método query retorna um stmt
$user = $stmt->fetch(PDO::FETCH_ASSOC); // Retorna um unico registro objeto

var_dump($user);
echo $user['nome'];





// Foreach listando registros
$conn = new PDO($dsn, $user, $senha);
$query = "select * from tb_usuarios";

$stmt = $conn->query($query); // o método query retorna um stmt

$lista = $stmt->fetchAll(PDO::FETCH_ASSOC); 

//var_dump($lista);

foreach($lista as $key => $value) {
    echo $value['nome'];
    echo '<hr>';
}






// Foreach listando registros Query on the run
$conn = new PDO($dsn, $user, $senha);
$query = "select * from tb_usuarios";

foreach($conn->query($query) as $key => $value) {
    var_dump($value);
    echo '<hr>';
}







// Query completa com Prepare Statement

$conn = new PDO('pgsql:host=localhost;dbname=bancoteste', 'postgres', '123456');

$query = "SELECT * from tb_usuarios where ";
$query .= " email = :usuario ";
$query .= " AND senha = :senha ";

$stmt = $conn->prepare($query); // Prepare não executa a query ele aguarda ordens
$stmt->bindValue(':usuario', $_POST['user']);
$stmt->bindValue(':senha', $_POST['senha']); // tambem pode ser definido o tipo como terceiro parametro

$stmt->execute(); // Executa a query
$result = $stmt->fetch(); // Retorna um unico registro

var_dump($result);
