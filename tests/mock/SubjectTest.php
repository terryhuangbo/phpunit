<?php

namespace Tests\Mock;

use PHPUnit\Framework\TestCase;


class SubjectTest extends TestCase
{
    public function testObserversAreUpdated()
    {
        // Create a mock for the Observer class,
        // only mock the update()    method.
        $observer = $this->getMockBuilder(Observer::class)
            ->setMethods(['update'])
            ->getMock();

        // Set up the expectation for the update() method
        // to be called only once and with the string 'something'
        // as its parameter.
        $observer->expects($this->once())//这里指调用次数，还可为never,atLeastOnce,exactly,at
        ->method('update')
            ->with($this->equalTo('something'));

        // Create a Subject object and attach the mocked
        // Observer object to it.
        $subject = new Subject('My subject');
        $subject->attach($observer);

        // Call the doSomething() method on the $subject object
        // which we expect to call the mocked Observer object's
        // update() method with the string 'something'.
        $subject->doSomething();
    }

    public function testErrorReported()
    {
        // Create a mock for the Observer class, mocking the
        // reportError() method
        $observer = $this->getMockBuilder(Observer::class)
            ->setMethods(['reportError'])
            ->getMock();

        $observer->expects($this->once())//定义reportError的行为
        ->method('reportError')
            ->with(
                $this->greaterThan(0),     //第一个参数大于0
                $this->stringContains('Something'), //第二个参数包含'Something'
                $this->anything()    //第三个参数为任意值
            );

        $subject = new Subject('My subject');
        $subject->attach($observer);

        // The doSomethingBad() method should report an error to the observer
        // via the reportError() method
        $subject->doSomethingBad();
    }
}
