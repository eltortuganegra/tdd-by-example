<?php

namespace chapter_20;

class WasRun extends TestCase
{
    public $wasRun;

    public function __construct(string $methodName)
    {
        parent::__construct($methodName);
        $this->wasRun = false;
    }

    public function testMethod()
    {
        $this->wasRun = true;
    }

}
