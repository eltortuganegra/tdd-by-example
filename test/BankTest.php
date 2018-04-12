<?php

use app\Bank;
use app\Money;
use PHPUnit\Framework\TestCase;

class BankTest extends TestCase
{
    public function testSimpleAddition()
    {
        $fiveDollars = Money::dollar(5);
        $sum = $fiveDollars->plus($fiveDollars);
        $bank = new Bank();
        $tenDollars = $bank->reduce($sum, 'USD');

        $this->assertEquals(Money::dollar(10), $tenDollars);
    }

    public function testReduceMoney()
    {
        $bank = new Bank();
        $result = $bank->reduce(Money::dollar(1), 'USD');

        $this->assertEquals(Money::dollar(1), $result);

    }

    public function testReduceMoneyDifferentCurrency()
    {
        $bank = new Bank();
        $bank->addRate('CHF', 'USD', 2);
        $result = $bank->reduce(Money::franc(2), 'USD');

        $this->assertEquals(Money::dollar(1), $result);
    }

    public function testIdentityRate()
    {
        $bank = new Bank();
        $rate = $bank->rate('USD', 'USD');


        $this->assertEquals(1, $rate);
    }

    public function testMixedAddition()
    {
        // Arrange
        $fiveBucks = Money::dollar(5);
        $tenFrancs = Money::franc(10);
        $bank = new Bank();
        $bank->addRate('CHF', 'USD', 2);

        // Act
        $result = $bank->reduce($fiveBucks->plus($tenFrancs), 'USD');

        // Assert
        $this->assertEquals(Money::dollar(10), $result);
    }

}