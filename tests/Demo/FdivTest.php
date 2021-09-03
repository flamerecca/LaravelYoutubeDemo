<?php

namespace Tests\Demo;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class FdivTest extends TestCase
{
    /**
     * @test
     */
    public function example()
    {
        dd(fdiv(0, 0));
    }
}
