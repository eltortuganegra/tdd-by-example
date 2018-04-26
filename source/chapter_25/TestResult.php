<?php

namespace chapter_25;

class TestResult
{
    private $runCount;
    private $errorCount;

    public function __construct()
    {
        $this->runCount = 0;
        $this->errorCount = 0;
    }

    public function testStarted()
    {
        $this->runCount++;
    }

    public function summary()
    {
        return $this->runCount . ' run, ' . $this->errorCount . ' failed';
    }

    public function testFailed()
    {
        $this->errorCount++;
    }
}
