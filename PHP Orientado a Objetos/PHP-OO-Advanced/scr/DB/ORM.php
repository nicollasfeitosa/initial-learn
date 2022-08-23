<?php 

namespace NicollasF\DB;

class ORM
{

    private $db;

    public function setDb(Db $db)
    {
        $this->db = $db;
    }

    public function select(bool $data)
    {
        if ($data) {
            return [];
        }

        throw new \Exception("Data deveria ser positivo", 1);
        
    }
}