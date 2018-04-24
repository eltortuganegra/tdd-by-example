<?php

namespace chapter_24;


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
        try {
            $methodName = $this->methodName;
            $this->$methodName();
        } catch(\Exception $e) {
            $result->testFailed();
        }

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