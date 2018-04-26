<?php

namespace chapter_23;

class TestCaseTest extends TestCase
{
    public function testTemplateMethod()
    {
        $test = new WasRun('testMethod');
        $test->run();
        assert('setUp testMethod tearDown ' == $test->log, 'testMethod was not executed successfully.');
    }

    public function testResult()
    {
        $test = new WasRun('testMethod');
        $result = $test->run();
        assert('1 run, 0 failed' == $result->summary(), 'Expected "1 run, 0 failed". Actual: ' . $result->summary());
    }

    public function testFailedResult()
    {
        $test = new WasRun('testBrokenMethod');
        $result = $test->run();
        assert('1run, 1 failed' == $result->summary(), 'Expected "1 run, 0 failed". Actual: ' . $result->summary());
    }

}