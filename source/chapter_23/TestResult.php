<?php

class TestResult
{
    private $runCount;

    public function __construct()
    {
        $this->runCount = 0;
    }

    public function testStarted()
    {
        $this->runCount++;
    }


    public function summary()
    {
        return $this->runCount . ' run, 0 failed';
    }
}
