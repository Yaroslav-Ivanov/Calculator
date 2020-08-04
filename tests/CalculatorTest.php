<?php


declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use App\CalculatorComp\Calculator;

class CalculatorTest extends TestCase
{
    function testCalc(): void
    {
        $calc = new Calculator();

        $this->assertIsFloat(
            $calc->sum(2, 2)
        );

        $this->assertEquals(
            4,
            $calc->sum(2, 2)
        );

        $this->assertIsFloat(
            $calc->div(5, 2)
        );

        $this->assertEquals(
            2.5,
            $calc->div(5, 2)
        );

        $this->assertIsFloat(
            $calc->dif(4, 2)
        );

        $this->assertEquals(
            2,
            $calc->dif(4, 2)
        );

        $this->assertIsFloat(
            $calc->mul(2, 2)
        );

        $this->assertEquals(
            4,
            $calc->mul(2, 2)
        );
    }
}