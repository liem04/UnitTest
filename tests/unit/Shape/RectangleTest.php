<?php

use UnitTest\Shape\Rectangle;

/**
 * Class RectangleTest
 */
class RectangleTest extends \PHPUnit\Framework\TestCase
{
    public function testCanCreateRectangleObject()
    {
        $rectangle = new Rectangle(2.0, 1.0);
        $this->assertInstanceOf(Rectangle::class, $rectangle);
        $this->assertEquals(1.0, $rectangle->getHeight());
        $this->assertEquals(2.0, $rectangle->getWidth());
    }

    /**
     * @expectedException \UnitTest\Shape\Exception\InvalidShapeException
     * @expectedExceptionMessage Width and height of rectangle must greater than 0
     */
    public function testThrowExceptionWhenLengthIsZero()
    {
        new Rectangle(0, 0);
    }
}