<?php

require_once __DIR__ . '/../vendor/autoload.php';

use app\TestCaseTest;
use app\TestResult;
use app\TestSuite;

$suite = new TestSuite();
$suite->add(new TestCaseTest('testTemplateMethod'));
$suite->add(new TestCaseTest('testResult'));
$suite->add(new TestCaseTest('testFailedResultFormatting'));
$suite->add(new TestCaseTest('testFailedResult'));
$suite->add(new TestCaseTest('testSuite'));
$result = new TestResult();
$suite->run($result);

echo $result->summary();

$test = new TestCaseTest('testSetUp');
$result = $test->run($result);