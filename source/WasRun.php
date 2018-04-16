<?php

namespace app;

use app\TestCase;

class WasRun extends TestCase
{
    public $wasRun;
    public $wasSetUp;

    public function __construct(string $methodName)
    {
        parent::__construct($methodName);
        $this->wasSetUp = false;
    }

    public function testMethod()
    {
        $this->wasRun = true;
    }

    public function setUp()
    {
        $this->wasRun = false;
        $this->wasSetUp = true;
    }

}