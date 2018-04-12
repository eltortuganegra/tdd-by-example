<?php

use app\Money;
use PHPUnit\Framework\TestCase;

class MoneyTest extends TestCase
{

    public function testPlusReturnsSum()
    {
        // Arrange
        $five = Money::dollar(5);

        // Act
        $sum = $five->plus($five);

        // Assert
        $this->assertEquals($five, $sum->augend);
        $this->assertEquals($five, $sum->addend);
    }

}
