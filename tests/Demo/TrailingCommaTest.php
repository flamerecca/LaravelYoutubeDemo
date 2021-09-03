<?php

namespace Tests\Demo;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TrailingCommaTest extends TestCase
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
        $this->assertEquals("aaabbb", $this->concat(
            "aaa",
            "bbb",
        ));

    }
}
