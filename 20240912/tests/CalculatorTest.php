<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Calculator;

class CalculatorTest extends TestCase
{
    public function testAdd()
    {
        $calculator = new Calculator();
        $result = $calculator->add(2, 3);
        $this->assertEquals(5, $result);
        $result = $calculator->add(5, 3);
        $this->assertEquals(8, $result);
    }

    public function testSubtract()
    {
        $calculator = new Calculator();
        $result = $calculator->subtract(2, 3);
        $this->assertEquals(-1, $result);
        $result = $calculator->subtract(9, 5);
        $this->assertEquals(4, $result);
    }
}