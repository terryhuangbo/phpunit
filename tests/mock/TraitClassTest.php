<?php

use PHPUnit\Framework\TestCase;

/**
 * 对特质的具体方法进行测试.
 */
trait AbstractTrait
{
    public function concreteMethod()
    {
        return $this->abstractMethod();
    }

    abstract public function abstractMethod();
}

class TraitClassTest extends TestCase
{
    public function testConcreteMethod()
    {
        $mock = $this->getMockForTrait(AbstractTrait::class);

        //对abstractMethod进行定义：调用次数，返回值...
        $mock->expects($this->any())
            ->method('abstractMethod')
            ->will($this->returnValue(true));

        $this->assertTrue($mock->concreteMethod());  //这里$mock->concreteMethod()的返回值就是true
    }
}
