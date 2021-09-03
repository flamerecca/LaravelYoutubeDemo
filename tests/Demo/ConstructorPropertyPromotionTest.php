<?php

namespace Tests\Demo;

use App\Http\Controllers\DemoController;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ConstructorPropertyPromotionTest extends TestCase
{
    /**
     * @test
     */
    public function example()
    {
        $test = new DemoController(name: "Demo", email: "aaa@aaa.aaa");
        $this->assertEquals("Demo", $test->name);
        $this->assertEquals("aaa@aaa.aaa", $test->email);
    }
}
