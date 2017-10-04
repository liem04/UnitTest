<?php

use PHPUnit\Framework\TestCase;

/**
 * Class CalculatorTest
 */
class CalculatorTest extends TestCase
{

    /**
     *
     */
    public function testSumCorrect()
    {
        $calculator = new \UnitTest\Calculator();
        $total = $calculator->sum(1, 3);
        $this->assertEquals(4, $total);
    }

    public function testSumNotCorrect()
    {
        $calculator = new \UnitTest\Calculator();
        $total = $calculator->sum(-1, 3);
        $this->assertNotEquals(4, $total);
    }
}