<?php

namespace chapter_23;

class TestCaseTest extends TestCase
{
    public function testTemplateMethod()
    {
        $test = new WasRun('testMethod');
        $result = $test->run();
        assert('1 run, 0 failed' == $result->summary(), 'Expected "1 run, 0 failed". Actual: ' . $result->summary());
    }

}