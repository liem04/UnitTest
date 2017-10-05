<?php

namespace UnitTest\Shape;

use UnitTest\Shape\Exception\InvalidShapeException;


/**
 * Class AreaCalculator
 * @package UnitTest\Shape
 */
class AreaCalculator
{

    /**
     * @var array
     */
    private $shapes = [];

    /**
     * AreaCalculator constructor.
     *
     * @param array $shapes
     */
    public function __construct(array $shapes)
    {
        $this->shapes = $shapes;
    }

    /**
     * @return float
     * @throws InvalidShapeException
     */
    public function sum(): float
    {
        $sum = 0;
        foreach ($this->shapes as $shape) {
            if (!$shape instanceof ShapeInterface) {
                throw new InvalidShapeException('There is a invalid shape');
            }
            $sum += $shape->area();
        }

        return $sum;
    }
}