<?php

namespace chapter_21;

class TestCaseTest extends TestCase
{
    private $test;

    public function setUp()
    {
        $this->test = new WasRun('testMethod');
    }

    public function testSetUp()
    {
        $this->test->run();
        assert($this->test->wasSetUp, 'Setup was not executed.');
    }

    public function testRunning()
    {
        $this->test->run();

        assert($this->test->wasRun, 'Test was not run.');
    }
}