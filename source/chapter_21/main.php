<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use chapter_21\TestCaseTest;

$test = new TestCaseTest('testSetUp');
$test->run();

$testRunning = new TestCaseTest('testRunning');
$testRunning->run();

