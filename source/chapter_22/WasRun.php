<?php

namespace chapter_22;

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

}