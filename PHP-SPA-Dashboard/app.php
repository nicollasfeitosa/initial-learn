<?php

// Classe dashboard
class Dashboard {
    public $data_inicio;
    public $data_fim;

    public $numeroVendas;
    public $totalVendas;

    public $clientesAtivos;
    public $clientesInativos;

    public $reclamacoes;
    public $elogios;
    public $sugestoes;

    public $despesasTotal;

    public function __get($attr){
        return $this->$attr;
    }

    public function __set($attr, $value){
        $this->$attr = $value;
        return $this;
    }

}

// Classe de Conexão com o Banco de Dados
class Conn {
    private $host = 'localhost';
    private $dbname = 'dashboard';
    private $user = 'root';
    private $pass = '123456';

    public function connect() {
        try {

            $conn = new PDO(
                "mysql:host=$this->host;dbname=$this->dbname",
                "$this->user",
                "$this->pass"
            );

            // Define a comunicação como UTF8
            $conn->exec('SET charset SET utf8');

            return $conn;

        } catch (PDOException $e) {

            echo '<h3>'.$e->getMessage().'</h3>';
        }
    }
}

// Classe Model ou Serviço
class Bd {
    private $conn;
    private $dashboard;

    public function __construct(Conn $conn, Dashboard $dashboard)
    {
        $this->conn = $conn->connect();
        $this->dashboard = $dashboard;
    }

    public function getNumeroVendas(){
        $query = '
            SELECT 
                count(*) AS numero_vendas 
            FROM 
                tb_vendas 
            WHERE 
                data_venda BETWEEN :data_inicio AND :data_fim
            ';

        $stmt = $this->conn->prepare($query);
        $stmt->bindValue(':data_inicio', $this->dashboard->__get('data_inicio'));
        $stmt->bindValue(':data_fim', $this->dashboard->__get('data_fim'));
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_OBJ)->numero_vendas;
    }

    public function getTotalVendas(){
        $query = '
            SELECT 
                SUM(total) AS total_vendas
            FROM 
                tb_vendas 
            WHERE 
                data_venda BETWEEN :data_inicio AND :data_fim
            ';

        $stmt = $this->conn->prepare($query);
        $stmt->bindValue(':data_inicio', $this->dashboard->__get('data_inicio'));
        $stmt->bindValue(':data_fim', $this->dashboard->__get('data_fim'));
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_OBJ)->total_vendas;
    }

    public function getClientesAtivos(){
        $query = 'SELECT count(cliente_ativo) AS clientesAtivos FROM dashboard.tb_clientes WHERE cliente_ativo = :um';

        $stmt = $this->conn->prepare($query);
        $stmt->bindValue(':um', '1');
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_OBJ)->clientesAtivos;
    }

    public function getClientesInativos(){
        $query = 'SELECT count(cliente_ativo) AS clientesInativos FROM dashboard.tb_clientes WHERE cliente_ativo = :zero';

        $stmt = $this->conn->prepare($query);
        $stmt->bindValue(':zero', '0');
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_OBJ)->clientesInativos;
    }

    public function getDespesasTotal(){
        $query = 'SELECT SUM(total) AS despesasTotal FROM dashboard.tb_despesas WHERE data_despesa BETWEEN :data_inicio AND :data_fim';

        $stmt = $this->conn->prepare($query);
        $stmt->bindValue('data_inicio', $this->dashboard->__get('data_inicio'));
        $stmt->bindValue('data_fim', $this->dashboard->__get('data_fim'));
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_OBJ)->despesasTotal;
    }

    public function getReclamacoes(){
        $query = 'SELECT count(*) AS reclamacoes FROM dashboard.tb_contatos WHERE tipo_contato = :tres';

        $stmt = $this->conn->prepare($query);
        $stmt->bindValue('tres', '3');
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_OBJ)->reclamacoes;
    }

    public function getElogios(){
        $query = 'SELECT count(*) AS elogios FROM dashboard.tb_contatos WHERE tipo_contato = :dois';

        $stmt = $this->conn->prepare($query);
        $stmt->bindValue('dois', '2');
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_OBJ)->elogios;
    }

    public function getSugestoes(){
        $query = 'SELECT count(*) AS sugestoes FROM dashboard.tb_contatos WHERE tipo_contato = :um';

        $stmt = $this->conn->prepare($query);
        $stmt->bindValue('um', '1');
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_OBJ)->sugestoes;
    }
}

// Code

if ($_GET) { // SE A REQUISIÇÃO FOR GET:
    $conn = new Conn();

    $dashboard = new Dashboard();

    $periodo = explode('-', $_GET['periodo']);
    $ano = $periodo[0];
    $mes = $periodo[1];

    $diasMes = cal_days_in_month(CAL_GREGORIAN, $mes, $ano);

    $dashboard->__set('data_inicio', $ano.'-'.$mes.'-'.'01');
    $dashboard->__set('data_fim', $ano.'-'.$mes.'-'.$diasMes);

    $bd = new Bd($conn, $dashboard);

    $dashboard->__set('numeroVendas', $bd->getNumeroVendas());
    $dashboard->__set('totalVendas', $bd->getTotalVendas());

    $dashboard->__set('clientesAtivos', $bd->getClientesAtivos());
    $dashboard->__set('clientesInativos', $bd->getClientesInativos());

    $dashboard->__set('reclamacoes', $bd->getReclamacoes());
    $dashboard->__set('elogios', $bd->getElogios());
    $dashboard->__set('sugestoes', $bd->getSugestoes());

    $dashboard->__set('despesasTotal', $bd->getDespesasTotal());

    echo json_encode($dashboard); // Retorno da requisição Ajax o.o

    exit;
    //var_dump($dashboard);
}

echo 'Hi dev =)';
