<?php 

namespace NicollasDEV;

class DbTest extends \PHPUnit\Framework\TestCase
{
    public function testTestarSeClasseEstaInstanciando(){
        $db = new Db;
        $this->assertInstanceOf('NicollasDEV\Db', $db);
    }
}
