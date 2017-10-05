<?php


use PHPUnit\Framework\TestCase;
use UnitTest\Shape\AreaCalculator;
use UnitTest\Shape\Cube;
use UnitTest\Shape\Rectangle;
use UnitTest\Shape\Square;

/**
 * Class AreaCalculatorTest
 * @package Shape
 */
class AreaCalculatorTest extends TestCase
{
    public function testNoShapeWillReturnZero()
    {
        $shapes = [];
        $calculator = new AreaCalculator($shapes);
        $sum = $calculator->sum();
        $this->assertEquals(0, $sum);
    }

    /**
     * @expectedException UnitTest\Shape\Exception\InvalidShapeException
     * @expectedExceptionMessage There is a invalid shape
     */
    public function testThrowExceptionIfThereIsAInvalidShape()
    {
        $shapes = [
            new Square(1.0),
            new Cube()
        ];
        $calculator = new AreaCalculator($shapes);
        $calculator->sum();
    }

    public function testOneShapeReturnCorrectSum()
    {
        $shapes = [
            new Square(1.0)
        ];
        $calculator = new AreaCalculator($shapes);
        $sum = $calculator->sum();
        $this->assertEquals(1.0, $sum);
    }

    public function testManyShapesReturnCorrectSum()
    {
        $shapes = [
            new Square(1.0),
            new Square(2.0),
            new Rectangle(1.0, 2.0)
        ];
        $calculator = new AreaCalculator($shapes);
        $sum = $calculator->sum();
        $this->assertEquals(7.0, $sum);
    }
}