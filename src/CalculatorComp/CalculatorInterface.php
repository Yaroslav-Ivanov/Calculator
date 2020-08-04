<?php

namespace App\CalculatorComp;

interface CalculatorInterface
{
    public function sum(float $a, float $b): float;

    public function mul(float $a, float $b): float;

    public function dif(float $a, float $b): float;

    public function div(float $a, float $b): float;
}
