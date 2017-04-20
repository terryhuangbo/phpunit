<?php

use PHPUnit\Framework\TestCase;

class StubTest extends TestCase
{
    public function testStub()
    {
        require_once 'SomeClass.php';

        $stub = $this->createMock(SomeClass::class);

//        $stub->method('doSomeThing')->willReturn('foo');
//        $stub->method('doSomeThing')->will($this->returnArgument(0));
//        $stub->method('doSomeThing')->will($this->returnSelf());

        // 创建从参数到返回值的映射。
//        $map = [
//            ['a', 'b', 'c', 'd'],
//            ['e', 'f', 'g', 'h']
//        ];

        // 配置桩件。
//        $stub->method('doSomething')
//            ->will($this->returnValueMap($map));

//        $this->assertEquals($stub, $stub->doSomeThing());
        // $stub->doSomething() 根据提供的参数返回不同的值。
//        $this->assertEquals('d', $stub->doSomething('a', 'b', 'c'));
//        $this->assertEquals('h', $stub->doSomething('e', 'f', 'g'));

        //return callback
//        $stub->method('doSomething')
//            ->will($this->returnCallback('strtolower'));
//        $this->assertEquals('h', $stub->doSomething('H'));

        //return onConsecutiveCalls
//        $stub->method('doSomething')
//            ->will($this->onConsecutiveCalls(2, 3, 5, 7));
//        $this->assertEquals(2, $stub->doSomething());
//        $this->assertEquals(3, $stub->doSomething());

        //throwException
        $stub->method('doSomething')
            ->will($this->throwException(new \Exception()));
        $stub->doSomething();
    }
}
