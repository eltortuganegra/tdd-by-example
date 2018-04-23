<?php

namespace chapter_22;

class TestCase
{
    protected $methodName;

    public function __construct(string $methodName)
    {
        $this->methodName = $methodName;
    }

    public function run()
    {
        $this->setUp();
        $methodName = $this->methodName;
        $this->$methodName();
        $this->tearDown();
    }

    public function setUp()
    {
    }

    public function tearDown()
    {
    }

}