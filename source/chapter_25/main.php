<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use chapter_25\TestCaseTest;
use chapter_25\TestResult;
use chapter_25\TestSuite;

$suite = new TestSuite();
$suite->add(new TestCaseTest('testTemplateMethod'));
$suite->add(new TestCaseTest('testResult'));
$suite->add(new TestCaseTest('testFailedResult'));
$suite->add(new TestCaseTest('testFailedResultFormatting'));
$suite->add(new TestCaseTest('testSuite'));
$result = new TestResult();
$suite->run($result);
print $result->summary();