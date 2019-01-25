<?php

namespace jefersonc\Strategy;

trait StrategyTrait
{
    protected static $implementation = null;

    static public function apply(string $index, ...$params)
    {
        if(static::$implementation === null) {
            static::$implementation = new self();
        }

        $map = static::$implementation->map();

        return new $map[$index](...$params);
    }
}
