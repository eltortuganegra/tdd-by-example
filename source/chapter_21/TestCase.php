<?php

namespace chapter_21;

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
    }

    public function setUp()
    {
    }

}