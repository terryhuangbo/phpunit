<?php

use PHPUnit\Framework\TestCase;

class StubTest extends TestCase
{
    public function testStub()
    {
        require_once 'SomeClass.php';

        $stub = $this->createMock(SomeClass::class);

        $stub->method('doSomeThing')->willReturn('foo');

        $this->assertEquals('foo', $stub->doSomeThing());
    }
}
