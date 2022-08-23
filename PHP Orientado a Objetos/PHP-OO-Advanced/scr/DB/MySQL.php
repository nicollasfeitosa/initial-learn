<?php 

namespace NicollasF\DB;

class MySql implements Db
{
    public function connect() :string // esse método deve retornar uma string
    {
        return 'Connected to MySQL database';
    }
}