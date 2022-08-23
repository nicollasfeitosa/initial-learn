<?php 

class Conn {
    private $host = 'localhost';
    private $dbname = 'ToDoApp';
    private $user = 'postgres';
    private $pass = '123456';

    public function conectar() {
        try {

            $conn = new PDO(
                "pgsql:host=$this->host;dbname=$this->dbname",
                "$this->user",
                "$this->pass"
            );

            return $conn;

        } catch (PDOException $e) {
            echo "<p>".$e->getMessage()."<p>";
        }
    }
}

?>