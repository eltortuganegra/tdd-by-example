<?php

namespace app;

class TestCase
{
    protected $methodName;

    public function __construct(string $methodName)
    {
        $this->methodName = $methodName;
    }

    public function run():TestResult
    {
        $result = new TestResult();
        $result->testStarted();
        $this->setUp();
        $methodName = $this->methodName;
        try {
            $this->$methodName();
        } catch(\Exception $e) {
            $result->testFailed();
        }
        $this->tearDown();

        return $result;
    }

}