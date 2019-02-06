<?php

use PHPUnit\Framework\TestCase;
use jefersonc\Strategy\Examples\OperationStrategy;

final class OperationsTest extends TestCase
{
    function testOperationStrategy()
    {
        $strategy = new OperationStrategy();
        $adiction = $strategy->apply('adiction', 10, 5);
        $subtraction = $strategy->apply('subtraction', 10, 5);
        $division = $strategy->apply('division', 10, 5);

        $this->assertEquals(15, $adiction);
        $this->assertEquals(5, $subtraction);
        $this->assertEquals(2, $division);
    }
}
