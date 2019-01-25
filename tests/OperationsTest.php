<?php

use PHPUnit\Framework\TestCase;
use jefersonc\Strategy\Examples\OperationStrategy;

final class OperationsTest extends TestCase
{
    function testOperationStrategy()
    {
        $result = OperationStrategy::apply('adiction', 10, 5);

        $this->assertEquals(15, $result);
    }
}
