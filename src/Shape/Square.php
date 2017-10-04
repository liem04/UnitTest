<?php

namespace UnitTest\Shape;


use UnitTest\Shape\Exception\InvalidShapeException;

/**
 * Class Square
 * @package UnitTest\Shape
 */
class Square implements ShapeInterface
{

    /**
     * @var float
     */
    private $length;

    /**
     * Square constructor.
     *
     * @param float $length
     *
     * @throws InvalidShapeException
     */
    public function __construct(float $length)
    {
        if (0 >= $length) {
            throw new InvalidShapeException('Length of square must greater than 0');
        }

        $this->length = $length;
    }

    /**
     * @return float
     */
    public function area(): float
    {
        return $this->length ** 2;
    }
}