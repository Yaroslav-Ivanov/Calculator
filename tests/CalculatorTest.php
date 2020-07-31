<?php


declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Core\stringStr;
use Core\calculator;

class CalculatorTest extends TestCase
{
    function testCalc(): void
    {
        $calc = new calculator();

        $this->assertIsInt(
            $calc->sum(2, 2)
        );

        $this->assertEquals(
            4,
            $calc->sum(2, 2)
        );

        $this->assertIsFloat(
            $calc->del(5, 2)
        );

        $this->assertEquals(
            2.5,
            $calc->del(5, 2)
        );

        $this->assertIsInt(
            $calc->dif(4, 2)
        );

        $this->assertEquals(
            2,
            $calc->dif(4, 2)
        );

        $this->assertIsInt(
            $calc->mul(2, 2)
        );

        $this->assertEquals(
            4,
            $calc->mul(2, 2)
        );
    }
}