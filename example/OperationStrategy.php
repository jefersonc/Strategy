<?php

namespace jefersonc\Strategy\Examples;

use jefersonc\Strategy\Strategy;
use jefersonc\Strategy\StrategyTrait;

final class OperationStrategy implements Strategy
{
    use StrategyTrait;

    public function map()
    {
        return [
            'adiction' => Adiction::class,
            'subtraction' => Subtraction::class
        ];
    }
}
