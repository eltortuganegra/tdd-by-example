<?php

namespace app;

use PHPUnit\Framework\TestCase;

class SumTest extends TestCase
{
    public function testSumPlusMoney()
    {
        // Arrange
        $fiveBucks = Money::dollar(5);
        $tenFrancs = Money::franc(10);
        $bank = new Bank();
        $bank->addRate('CHF', 'USD', 2);
        $sum = (new Sum($fiveBucks, $tenFrancs))->plus($fiveBucks);

        // Act
        $result = $bank->reduce($sum, 'USD');

        // Assert
        $this->assertEquals(Money::dollar(15), $result);
    }

    public function testSumTimes()
    {
        // Arrange
        $fiveBucks = Money::dollar(5);
        $tenFrancs = Money::franc(10);
        $bank = new Bank();
        $bank->addRate('CHF', 'USD', 2);
        $sum = (new Sum($fiveBucks, $tenFrancs))->times(2);

        // Act
        $result = $bank->reduce($sum, 'USD');

        // Assert
        $this->assertEquals(Money::dollar(20), $result);
    }
}
