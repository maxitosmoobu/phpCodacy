<?php
require 'vendor/autoload.php';

use Calculator\BasicCalculator;

class calculatorTest extends PHPUnit\Framework\TestCase
{
    /**
     * @covers Calculator\BasicCalculator
     */
    public function testAdd()
    {
        $this->assertEquals(BasicCalculator::add(1, 2), 3.0);
        $this->assertEquals(BasicCalculator::add(1.0, 2.0), 3.0);
        $this->assertEquals(BasicCalculator::add(0, 2.0), 2.0);
        $this->assertEquals(BasicCalculator::add(2.0, 0), 2.0);
        $this->assertEquals(BasicCalculator::add(-4, 2.0), -2.0);
    }

    /**
     * @covers Calculator\BasicCalculator
     */
    public function testSubtract()
    {
        $this->assertEquals(BasicCalculator::subtract(1, 2), -1.0);
        $this->assertEquals(BasicCalculator::subtract(2, 1), 1.0);
        $this->assertEquals(BasicCalculator::subtract(1.0, 2.0), -1.0);
        $this->assertEquals(BasicCalculator::subtract(0, 2.0), -2.0);
        $this->assertEquals(BasicCalculator::subtract(2.0, 0), 2.0);
        $this->assertEquals(BasicCalculator::subtract(-4, 2.0), -6.0);
    }
}
