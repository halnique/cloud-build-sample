<?php

namespace HalniqueTest\CloudBuildSample;

use Halnique\CloudBuildSample\Sample;

class SampleTest extends TestCase
{
    public function testHello()
    {
        $this->assertEquals('Hello', Sample::hello());
    }
}
