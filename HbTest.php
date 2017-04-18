<?php
require(__DIR__ . '/vendor/autoload.php');

use PHPUnit\Framework\TestCase;

class HbTest extends TestCase
{
    /**
     * @author   hb
     * @dataProvider additionProvider
     */
    public function testAdd($a, $b, $expected)
    {
        echo 121;
        $this->assertEquals($expected, $a + $b);
    }

    public function additionProvider()
    {
        return [
            'adding zeros'  => [0, 0, 0],
            'one plus one'  => [1, 1, 3],
            'zero plus one' => [0, 1, 1],
            'one plus zero' => [1, 0, 1],
        ];
    }

}

