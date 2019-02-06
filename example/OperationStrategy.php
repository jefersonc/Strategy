<?php

namespace jefersonc\Strategy\Examples;

use jefersonc\Strategy\Engine as Strategy;

final class OperationStrategy extends Strategy
{
    public function map()
    {
        return [
            'adiction' => Adiction::class,
            'subtraction' => Subtraction::class,
            'division' => function($a, $b) {
                return $a / $b;
            }
        ];
    }
}
