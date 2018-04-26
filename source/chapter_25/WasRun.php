<?php

namespace chapter_25;

use Exception;

class WasRun extends TestCase
{
    public $log;

    public function testMethod()
    {
        $this->log = $this->log . "testMethod ";
    }

    public function setUp()
    {
        $this->log = "setUp ";
    }

    public function tearDown()
    {
        $this->log = $this->log . "tearDown ";
    }

    public function testBrokenMethod()
    {
        throw new Exception();
    }


}