<?php

namespace jefersonc\Strategy;

trait StrategyTrait
{
    protected static $implementation = null;

    static public function apply(string $index, ...$params)
    {
        $map = static::instance()->map();

        $class = $map[$index];

        return (new $class(...$params))();
    }

    private static function instance () {
        if(static::$implementation === null) {
            static::$implementation = new self();
        }

        return static::$implementation;
    }

    static public function get(string $class)
    {
        $map = static::instance()->map();

        $class = $map[$index];

        return new $map[$index];
    }

}
