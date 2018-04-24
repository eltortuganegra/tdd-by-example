<?php

namespace chapter_23;

use TestResult;

class TestCase
{
    protected $methodName;

    public function __construct(string $methodName)
    {
        $this->methodName = $methodName;
    }

    public function run()
    {
        $result = new TestResult();
        $result->testStarted();
        $this->setUp();
        $methodName = $this->methodName;
        $this->$methodName();
        $this->tearDown();

        return $result;
    }

    public function setUp()
    {
    }

    public function tearDown()
    {
    }

}