<?php 

namespace App;

class Connection {

    public static function getDb(){
        try {
            $conn = new \PDO(
                "pgsql:host=localhost; dbname=mvc",
                "postgres",
                "123456"
            );

            return $conn;

        } catch (\PDOException $e) {
            die('Erro na conexão');
        }
    }
}