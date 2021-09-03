<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class OrderTest extends TestCase
{
    /**
     * @test
     * @dataProvider orderData
     */
    public function test_order($price, $discountPrice)
    {
        $response = $this->get("/order/$price");
        $this->assertEquals($discountPrice, $response->getContent());
        $response->assertStatus(200);
    }

    public function orderData(): array
    {
        return [
            [0, -1],
            [50, 50],
            [3000, 3000*0.95],
            [4000, 4000*0.95],
            [5000, 5000*0.8],
            [50000, 50000*0.8],
            [50001, -1],
        ];
    }
}
