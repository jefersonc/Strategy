<?php

namespace jefersonc\Strategy\Examples;

use jefersonc\Strategy\StrategyContract;

class Adiction implements StrategyContract
{
    private $a;
    private $b;

    public function __construct($a, $b) {
        $this->a = $a;
        $this->b = $b;
    }

    public function __invoke() {
        return $this->a + $this->b;
    }
}
