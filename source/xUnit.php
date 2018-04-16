<?php

require_once 'TestCase.php';
require_once 'WasRun.php';

use app\WasRun;

class TestCaseTest
{
    public function testRunning()
    {
        $test = new WasRun('testMethod');
        assert( ! $test->wasRun, 'wasrun not initialize to false.');
        $test->run();
        assert($test->wasRun, 'wasrun not was run.');
    }
}

$test = new TestCaseTest();
$test->testRunning();
