<?php

require_once 'TestCase.php';
require_once 'WasRun.php';

use app\WasRun;

class TestCaseTest
{
    private $test;

    public function setUp()
    {
        $this->test = new WasRun('testMethod');
    }

    public function testRunning()
    {
        $this->test->run();
        assert($this->test->wasRun, 'wasRun not was run.');
    }

    public function testSetUp()
    {
        $this->test->run();
        assert($this->test->wasSetUp, 'The wasSetUp is false.');
    }

}

$test = new TestCaseTest();
$test->setUp();
$test->testRunning();
$test->testSetUp();