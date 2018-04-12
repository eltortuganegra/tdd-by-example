<?php

namespace app;

class Bank
{
    private $rates;

    public function __construct()
    {
        $this->rates = [];
    }

    public function reduce(Expression $source, string $to):Money
    {
        return $source->reduce($this, $to);
    }

    public function addRate(string $from, string $to, int $rate)
    {
        $key = $from.$to;
        $this->rates[$key] = $rate;
    }

    public function rate(string $from, string $to):int
    {
        if ($from === $to) {

            return 1;
        }

        $key = $from.$to;
        $rate = $this->rates[$key];

        return $rate;
    }

}