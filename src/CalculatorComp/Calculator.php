<?php

namespace App\CalculatorComp;

class Calculator implements CalculatorInterface
{
    private float $a;
    private float $b;

    public function __construct(float $a = 0, float $b = 0)
    {
        $this->a = $a;
        $this->b = $b;
    }

    public function sum(float $a, float $b): float
    {
        return $a + $b;
    }

    public function mul(float $a, float $b): float
    {
        return $a * $b;
    }

    public function dif(float $a, float $b): float
    {
        return $a - $b;
    }

    public function div(float $a, float $b): float
    {
        return $a / $b;
    }
}
