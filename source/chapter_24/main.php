<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use chapter_24\TestCaseTest;

$test = new TestCaseTest('testTemplateMethod');
$test->run();

$test = new TestCaseTest('testResult');
$test->run();

$test = new TestCaseTest('testFailedResult');
$test->run();

$test = new TestCaseTest('testFailedResultFormatting');
$test->run();