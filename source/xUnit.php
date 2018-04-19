<?php

require_once 'TestCase.php';
require_once 'WasRun.php';
require_once 'TestResult.php';
require_once 'TestCaseTest.php';

use app\TestCaseTest;

$test = new TestCaseTest();
$test->testTemplateMethod();
$test->testResult();
$test->testFailedResultFormatting();
$test->testFailedResult();
