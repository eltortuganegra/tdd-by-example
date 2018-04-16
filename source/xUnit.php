<?php

require_once 'TestCase.php';
require_once 'WasRun.php';

use app\WasRun;

$test = new WasRun('testMethod');
echo $test->wasRun;
$test->run();
echo $test->wasRun;