<?php 

namespace NicollasF\DB;

class Postgres implements Db
{
    public function connect() :string // esse método deve retornar uma string
    {
        return 'Connected to Postgres database';
    }
}