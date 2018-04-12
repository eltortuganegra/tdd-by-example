<?php

namespace app;

class Sum implements Expression
{
    public $augend;
    public $addend;

    public function __construct(Money $augend, Money $addend)
    {
        $this->augend = $augend;
        $this->addend = $addend;
    }

    public function reduce(Bank $bank, string $to):Money
    {
        $amount = $this->addend->getAmount() + $this->augend->getAmount();

        return new Money($amount, $to);
    }
}