<?php

namespace app;

use app\WasRun;

class TestCaseTest
{
    public function testTemplateMethod()
    {
        $test = new WasRun('testMethod');
        $result = $test->run();
        assert('1 run, 0 failed' == $result->summary(), 'Expected "1 run, 0 failed" actual: ' . $result->summary());
    }

    public function testFailedResultFormatting()
    {
        $result = new TestResult();
        $result->testStarted();
        $result->testFailed();
        assert('1 run, 1 failed' == $result->summary() , 'Expected "1 run, 1 failed". Actual:' . $result->summary());
    }

    public function testResult()
    {
        $test = new WasRun('testMethod');
        $result = $test->run();
        assert('1 run, 0 failed' == $result->summary(), 'Expected "1 run, 0 failed" actual: ' . $result->summary());
    }

    public function testFailedResult()
    {
        $test = new WasRun('testBrokenMethod');
        $result = $test->run();
        assert('1 run, 1 failed' == $result->summary(), 'Expected "1 run, 1 failed". Actual: ' . $result->summary());
    }


}