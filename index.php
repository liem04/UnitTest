<?php

require_once __DIR__ . '/vendor/autoload.php';

$calculator = new \UnitTest\Calculator();
echo $calculator->sum(4,5);