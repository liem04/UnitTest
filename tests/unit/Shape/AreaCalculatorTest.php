<?php

use PHPUnit\Framework\TestCase;
use UnitTest\Shape\Rectangle;
use UnitTest\Shape\Square;

/**
 * Class AreaCalculatorTest
 */
class AreaCalculatorTest extends TestCase
{
    public function testSumCorrect()
    {
        $shapes = [];

        $square = $this->getMockBuilder(Square::class)->disableOriginalConstructor()->getMock();
        $square->method('area')->willReturn(1.0);
        $shapes[] = $square;

        $rectangle = $this->getMockBuilder(Rectangle::class)->disableOriginalConstructor()->getMock();
        $rectangle->method('area')->willReturn(2.0);
        $shapes[] = $rectangle;

        $calculator = new \UnitTest\Shape\AreaCalculator($shapes);
        $this->assertEquals(3.0, $calculator->sum());
    }
}