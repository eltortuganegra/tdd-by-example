<?php

namespace app;

class TestCase
{
    protected $methodName;

    public function __construct(string $methodName)
    {
        $this->methodName = $methodName;
    }

    public function run()
    {
        $methodName = $this->methodName;
        $this->$methodName();
    }

}