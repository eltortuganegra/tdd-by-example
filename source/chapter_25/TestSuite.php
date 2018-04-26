<?php

namespace chapter_25;

class TestSuite
{
    private $tests;

    public function __construct()
    {
        $this->tests = [];
    }

    public function add(TestCase $test)
    {
        $this->tests[] = $test;
    }

    public function run(TestResult $result)
    {
        foreach ($this->tests as $test)
        {
            $test->run($result);
        }
    }
}