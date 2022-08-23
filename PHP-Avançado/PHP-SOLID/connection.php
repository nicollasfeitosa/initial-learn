<?php

require __DIR__ . '/vendor/autoload.php';

interface Db
{
    public function connect($server, $name, $user, $pass);
}

class Mysql implements Db
{
    public function connect($server, $name, $user, $pass)
    {
        echo 'Conecta com MySQL';
    }
}

class Postgres implements Db
{
    public function connect($server, $name, $user, $pass)
    {
        echo 'Conecta com PostgreSQL';
    }
}

class Connection
{
    public function __construct($server, $name, $user, $pass)
    {
        $this->server = $server;
        $this->name = $name;
        $this->user = $user;
        $this->pass = $pass;
    }

    public function connect(Db $db)
    {
        $db->connect($this->server, $this->name, $this->user, $this->pass);
    }
}

$conn = new Connection('localhost', 'curso_solid', 'root', '123456');
$conn->connect(new Mysql);

// $dependencias = [];
// $dependencias['db'] = function () {
//     $conn = new Connection('localhost', 'curso_solid', 'root', '123456');
//     $conn->connect(new Mysql);
// };

// $dependencias['db']();