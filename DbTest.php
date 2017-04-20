<?php

require __DIR__.'/vendor/autoload.php';

class MyGuestbookTest extends PHPUnit_Extensions_Database_TestCase
{
    /**
     * @return PHPUnit_Extensions_Database_DB_IDatabaseConnection
     */
    public function getConnection()
    {
        $database = 'test';
        $user = 'root';
        $password = '';
        $pdo = new PDO("mysql:host=localhost;dbname={$database}", $user, $password);

        return $this->createDefaultDBConnection($pdo, $database);
    }

    /**
     * @return PHPUnit_Extensions_Database_DataSet_IDataSet
     */
    public function getDataSet()
    {
        return $this->createFlatXmlDataSet(dirname(__FILE__).'/dataset/flatxml.xml');

//        return $this->createXmlDataSet(dirname(__FILE__).'/dataset/flat1.xml');

//        return new PHPUnit_Extensions_Database_DataSet_YamlDataSet(
//            dirname(__FILE__)."/dataset/yaml.yml"
//        );
//        $dataSet = new PHPUnit_Extensions_Database_DataSet_CsvDataSet();
//        $dataSet->addTable('guestbook', dirname(__FILE__)."/dataset/csv.csv");
//        return $dataSet;

//        $array = require dirname(__FILE__)."/dataset/array.php";
//        require_once "ArrayDataSet.php";
//        return new MyApp_DbUnit_ArrayDataSet($array);

//        $ds = new PHPUnit_Extensions_Database_DataSet_QueryDataSet($this->getConnection());
//        $ds->addTable('guestbook', 'SELECT * FROM guestbook');
    }

    public function testDb()
    {
        //        $queryTable = $this->getConnection()->createQueryTable( //dataTable方面，实际的值
//            'guestbook', 'SELECT * FROM guestbook'
//        );
//        $expectedTable = $this->createFlatXmlDataSet(dirname(__FILE__).'/dataset/flatxml.xml')//dataSet方面，预期的值
//        ->getTable("guestbook");
//        $this->assertTablesEqual($expectedTable, $queryTable);

        $this->assertEquals(1, 1);
    }
}
