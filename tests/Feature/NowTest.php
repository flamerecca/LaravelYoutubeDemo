<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Carbon;
use Tests\TestCase;

class NowTest extends TestCase
{
    /**
     * @test
     */
    public function example()
    {
        Carbon::setTestNow(Carbon::createFromDate(2000, 1, 1));
        $response = $this->get("/now/");
        $response->assertStatus(200);
        dd($response->getContent());
    }
}
