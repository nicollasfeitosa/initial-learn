<?php 

namespace NicollasDEV\Test\QueryBuilder;

class SqlTest extends \PHPUnit\Framework\TestCase
{
    public function testSelectQuery()
    {
        $sql = new \NicollasDEV\QueryBuilder\Sql;
        $query = $sql->table('users')
            ->select()
            ->getQuery();

        $this->assertEquals('SELECT * FROM users;', $query);
    }

    public function testSelectQueryComColunasEmFormatoTexto()
    {
        $sql = new \NicollasDEV\QueryBuilder\Sql;
        $query = $sql->table('users')
            ->select('username, password')
            ->getQuery();

        $this->assertEquals('SELECT username, password FROM users;', $query);
    }

    public function testSelectQueryComColunasEmFormatoArray()
    {
        $sql = new \NicollasDEV\QueryBuilder\Sql;
        $query = $sql->table('users')
            ->select(['username, password'])
            ->getQuery();

        $this->assertEquals('SELECT username, password FROM users;', $query);
    }
}