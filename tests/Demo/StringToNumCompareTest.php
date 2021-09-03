<?php

namespace Tests\Demo;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class StringToNumCompareTest extends TestCase
{
    /**
     * @test
     */
    public function example()
    {
        $this->assertFalse(0 == "foo");// True in php 7
        $this->assertFalse(0 == "");// True in php 7
        $this->assertFalse(42 == "42foo");// True in php 7
    }
}
