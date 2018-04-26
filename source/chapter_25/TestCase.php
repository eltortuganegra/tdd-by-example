<?php

namespace chapter_25;


class TestCase
{
    protected $methodName;

    public function __construct(string $methodName)
    {
        $this->methodName = $methodName;
    }

    public function run(TestResult $result)
    {
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