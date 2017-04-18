<?php

require __DIR__.'/vendor/autoload.php';

use PHPUnit\Framework\TestCase;

class StackTest extends TestCase
{
    protected $stack;

    protected function setUp()
    {
        $this->stack = [];
    }

    protected function tearDown()
    {
    }

    public static function setUpBeforeClass() //该test类的第一个测试运行前调用
    {
    }

    public static function tearDownAfterClass() //该test类的最后一个测试运行后调用
    {
    }

    public function testEmpty()
    {
        $this->assertTrue(empty($this->stack));
    }

    public function testPush()
    {
        array_push($this->stack, 'foo');
        $this->assertEquals('foo', $this->stack[count($this->stack) - 1]);
        $this->assertFalse(empty($this->stack));
    }

    public function testPop()
    {
        array_push($this->stack, 'foo');
        $this->assertEquals('foo', array_pop($this->stack));
        $this->assertTrue(empty($this->stack));
    }

    public function testCover()
    {
        $this->markTestIncomplete('it is not fulfilled');
    }

    public function testVarDump()
    {
        var_dump(12);
    }

    /**
     * @covers
     */
    public function testUncover()
    {
        $this->markTestSkipped('it is skipped');
    }
}
