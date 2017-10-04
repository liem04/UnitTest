<?php

namespace UnitTest\Shape;


use UnitTest\Shape\Exception\InvalidShapeException;

/**
 * Class Rectangle
 * @package Shape
 */
class Rectangle implements ShapeInterface
{

    /**
     * @var float
     */
    private $width;

    /**
     * @var float
     */
    private $height;

    /**
     * Rectangle constructor.
     *
     * @param float $width
     * @param float $height
     *
     * @throws InvalidShapeException
     */
    public function __construct(float $width, float $height)
    {
        if (0 >= $width || 0 >= $height) {
            throw new InvalidShapeException('Width and height of rectangle must greater than 0');
        }

        $this->width  = $width;
        $this->height = $height;
    }

    /**
     * @return float
     */
    public function area(): float
    {
        return $this->height * $this->width;
    }
}