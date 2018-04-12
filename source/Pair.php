<?php

namespace app;


class Pair
{
    private $from;
    private $to;

    public function __construct(string $from, string $to)
    {
        $this->from = $from;
        $this->to = $to;
    }

    public function equals(Pair $pair):boolean
    {
        return ($this->from === $pair->from) && ($this->to === $pair->to);
    }

    public function hashCode()
    {
        return 0;
    }
}