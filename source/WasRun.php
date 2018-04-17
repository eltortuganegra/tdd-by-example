<?php

namespace app;

use app\TestCase;

class WasRun extends TestCase
{
    public $log;

    public function setUp()
    {
        $this->log = 'setUp ';
    }

    public function testMethod()
    {
        $this->log .= 'testMethod ';
    }

    public function tearDown()
    {
        $this->log .= 'tearDown ';
    }

}