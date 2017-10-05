<?php

use PHPUnit\Framework\TestCase;
use UnitTest\Shape\Square;

/**
 * Class SquareTest
 */
class SquareTest extends TestCase
{
    public function testCanCreateSquareObject()
    {
        $square = new Square(2.0);
        $this->assertInstanceOf(Square::class, $square);
        $this->assertEquals(2.0, $square->getLength());
    }

    /**
     * @expectedException \UnitTest\Shape\Exception\InvalidShapeException
     * @expectedExceptionMessage Length of square must greater than 0
     */
    public function testThrowExceptionWhenLengthIsZero()
    {
        new Square(0);
    }

    /**
     * @expectedException \UnitTest\Shape\Exception\InvalidShapeException
     * @expectedExceptionMessage Length of square must greater than 0
     */
    public function testThrowExceptionWhenLengthIsLessThanZero()
    {
        new Square(-1.0);
    }
}