<?php

namespace chapter_25;

class TestCaseTest extends TestCase
{
    private $result;

    public function setUp()
    {
        $this->result = new TestResult();
    }

    public function testTemplateMethod()
    {
        $test = new WasRun('testMethod');
        $test->run($this->result);
        assert('setUp testMethod tearDown ' == $test->log, 'testMethod was not executed successfully.');
    }

    public function testResult()
    {
        $test = new WasRun('testMethod');
        $test->run($this->result);
        assert('1 run, 0 failed' == $this->result->summary(), 'Expected "1 run, 0 failed". Actual: ' . $this->result->summary());
    }

    public function testFailedResult()
    {
        $test = new WasRun('testBrokenMethod');
        $test->run($this->result);
        assert('1 run, 1 failed' == $this->result->summary(), 'Expected "1 run, 1 failed". Actual: ' . $this->result->summary());
    }

    public function testFailedResultFormatting()
    {
        $this->result->testStarted();
        $this->result->testFailed();
        assert('1 run, 1 failed' == $this->result->summary(), 'Expected "1 run, 1 failed". Actual: ' . $this->result->summary());
    }

    public function testSuite()
    {
        $suite = new TestSuite();
        $suite->add(new WasRun('testMethod'));
        $suite->add(new WasRun('testBrokenMethod'));
        $suite->run($this->result);
        assert('2 run, 1 failed' == $this->result->summary(), 'Expected "2 run, 1 failed". Actual: ' . $this->result->summary());
    }

}