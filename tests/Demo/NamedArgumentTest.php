<?php

namespace Tests\Demo;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class NamedArgumentTest extends TestCase
{
    public function concat(string $prefix = "prefix", string $suffix = "suffix"): string
    {
        return $prefix . $suffix;
    }
    /**
     * @test
     */
    public function example()
    {
        $this->assertEquals("aaabbb", $this->concat("aaa", "bbb"));
    }
    /**
     * @test
     */
    public function withNamedArgument()
    {
        $this->assertEquals("aaabbb", $this->concat( prefix: "aaa", suffix: "bbb"));
    }
    /**
     * @test
     */
    public function changeOrder()
    {
        $this->assertEquals("aaabbb", $this->concat(suffix: "bbb", prefix: "aaa"));
    }
    /**
     * @test
     */
    public function omitPrefix()
    {
        $this->assertEquals("prefixbbb", $this->concat(suffix: "bbb"));
    }
}
