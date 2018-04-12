<?php

namespace app;

class Sum implements Expression
{
    public $augend;
    public $addend;

    public function __construct(Expression $augend, Expression $addend)
    {
        $this->augend = $augend;
        $this->addend = $addend;
    }

    public function reduce(Bank $bank, string $to):Money
    {
        $amount = $this->addend->reduce($bank, $to)->getAmount() + $this->augend->reduce($bank, $to)->getAmount();

        return new Money($amount, $to);
    }

    public function plus(Expression $addend): Expression
    {
        return null;
    }
}