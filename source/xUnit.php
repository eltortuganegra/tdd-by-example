<?php

require_once 'TestCase.php';
require_once 'WasRun.php';
require_once 'TestResult.php';

use app\WasRun;

class TestCaseTest
{
    public function testTemplateMethod()
    {
        $test = new WasRun('testMethod');
        $result = $test->run();
        assert('1 run, 0 failed' == $result->summary(), 'Expected "1 run, 0 failed" actual: ' . $result->summary());
    }

}

$test = new TestCaseTest();
$test->testTemplateMethod();