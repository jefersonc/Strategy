<?php

namespace jefersonc\Strategy;

class Engine
{
    private $mapping = [];

    public function __construct(array $map = []) {
        $this->mapping = array_merge($map, $this->map());
    }

    public function apply(string $index, ...$params)
    {
        if(is_callable($this->mapping[$index])) {
            return $this->mapping[$index](...$params);
        }

        return (new $this->mapping[$index](...$params))();
    }

    public function map() {
        return [];
    }
}
