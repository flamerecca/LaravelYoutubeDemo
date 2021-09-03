<?php

namespace Tests\Demo;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class MatchTest extends TestCase
{
    public function intToString(?int $input): string
    {
        return match($input) {
            1 => 'One',
            2 => 'Two',
            0, null => 'Zero',
            default => 'Unknown'
        };
    }
    /**
     * @test
     */
    public function example()
    {
        dd(fdiv(0, 0));
    }
}
