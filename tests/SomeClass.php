<?php

/**
 * 里面的所有方法都没有执行.
 */
class SomeClass
{
    public function __construct()
    {
        exit(1);
    }

    public function doSomeThing()
    {
        //do something
           return 'goo';
    }
}
