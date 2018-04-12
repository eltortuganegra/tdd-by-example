<?php

namespace app;

class Money implements Expression
{
    private $amount;
    private $currency;

    public function __construct($amount, $currency)
    {
        $this->amount = $amount;
        $this->currency = $currency;
    }

    static public function dollar(int $amount)
    {
        return new Money($amount, 'USD');
    }

    static public function franc(int $amount)
    {
        return new Money($amount, 'CHF');
    }

    public function plus(Expression $addend):Expression
    {
        return new Sum($this, $addend);
    }

    public function getAmount()
    {
        return $this->amount;
    }

    public function reduce(Bank $bank, string $to):Money
    {
        $rate = $bank->rate($this->currency, $to);

        return new Money($this->amount / $rate, $to);
    }

    public function times(int $multiplier):Expression
    {
        return new Money($this->amount * $multiplier, $this->currency);
    }
}