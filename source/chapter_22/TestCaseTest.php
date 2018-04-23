<?php

namespace chapter_22;

class TestCaseTest extends TestCase
{
    public function testTemplateMethod()
    {
        $test = new WasRun('testMethod');
        $test->run();
        assert('setUp testMethod tearDown ' == $test->log, 'testMethod was not executed successfully.');
    }

}