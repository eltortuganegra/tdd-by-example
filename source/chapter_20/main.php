<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use chapter_20\WasRun;

$test = new WasRun('testMethod');
echo $test->wasRun;
$test->run();
echo $test->wasRun;
