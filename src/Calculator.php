<?php

namespace UnitTest;


/**
 * Class Calculator
 * @package UnitTest
 */
class Calculator
{

    /**
     * @param int $a
     * @param int $b
     *
     * @return int
     */
    public function sum(int $a, int $b): int
    {
        return $a + $b;
    }
}