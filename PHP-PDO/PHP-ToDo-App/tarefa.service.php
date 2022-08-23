<?php

// CRUD
class TarefaService {

    private $conn;
    private $tarefa;

    public function __construct(Conn $conn, Tarefa $tarefa)
    {
        $this->conn = $conn->conectar();
        $this->tarefa = $tarefa;
    }

    public function inserir(){ // Create
        $query = "INSERT INTO tb_tarefas(tarefa) VALUES (:tarefa)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindValue(':tarefa', $this->tarefa->__get('tarefa'));
        $stmt->execute();
    }

    public function recuperar(){ // Read
        $query = 'SELECT t.id, s.status, t.tarefa FROM tb_tarefas as t left join tb_status as s on (t.id_status = s.id) ORDER BY id DESC';
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function pesquisar($termo){
		$query = "SELECT t.id, s.status, t.tarefa FROM tb_tarefas as t left join tb_status as s on (t.id_status = s.id) WHERE LOWER(tarefa) LIKE LOWER(?)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $termo);
		$stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function atualizar(){ // Update
        
        $query = "update tb_tarefas set tarefa = ? where id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindValue(1, $this->tarefa->__get('tarefa'));
        $stmt->bindValue(2, $this->tarefa->__get('id'));
        return $stmt->execute();
    }

    public function remover(){ // Delete
        
        $query = 'DELETE from tb_tarefas WHERE id = :id';
        $stmt = $this->conn->prepare($query);
        $stmt->bindValue(':id', $this->tarefa->__get('id'));
        $stmt->execute();
    }

    public function marcarRealizada(){ // Marcar tarefa como finalizada
        
        $query = "UPDATE tb_tarefas set id_status = ? where id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindValue(1, $this->tarefa->__get('id_status'));
        $stmt->bindValue(2, $this->tarefa->__get('id'));
        return $stmt->execute();

    }

    public function recuperarPendencias(){
        $query = 'SELECT t.id, s.status, t.tarefa FROM tb_tarefas as t left join tb_status as s on (t.id_status = s.id) WHERE t.id_status = :id_status ORDER BY id DESC';
        $stmt = $this->conn->prepare($query);
        $stmt->bindValue(':id_status', $this->tarefa->__get('id_status'));
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
}

?>