<?php

require_once 'TestCase.php';
require_once 'WasRun.php';

use app\WasRun;

class TestCaseTest
{
    public function testTemplateMethod()
    {
        $test = new WasRun('testMethod');
        $test->run();
        assert('setUp testMethod tearDown ' == $test->log, 'Expected "setUp testMethod " actual: ' . $test->log);
    }

}

$test = new TestCaseTest();
$test->testTemplateMethod();
