<?php

use PHPUnit\Framework\TestCase;

/**
 * 对特质的具体方法进行测试.
 */
abstract class AbstractClass
{
    public function concreteMethod()
    {
        return $this->abstractMethod();
    }

    abstract public function abstractMethod();
}

class AbstractClassTest extends TestCase
{
    public function testConcreteMethod()
    {
        $mock = $this->getMockForAbstractClass(AbstractClass::class);

        //对abstractMethod进行定义：调用次数，返回值...
        $mock->expects($this->any())
            ->method('abstractMethod')
            ->will($this->returnValue(10));

        $this->assertEquals(10, $mock->concreteMethod());  //这里$mock->concreteMethod()的返回值就是10
    }
}
