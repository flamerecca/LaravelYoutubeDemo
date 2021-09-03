<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    /**
     * @dataProvider fizzData
     */
    public function test_fizzbuzz($input, $expected)
    {
        $response = $this->get("/fizzbuzz/$input");
        $this->assertEquals($expected, $response->getContent());
        $response->assertStatus(200);
    }

    public function fizzData(): array
    {
        return[
            ['0', '0'],
            ['1', '1'],
            ['5', 'buzz'],
            ['7', 'Whizz'],
            ['11', 'fizz'],
            ['35', 'buzzWhizz'],
            ['55', 'fizzbuzz'],
            ['77', 'fizzWhizz'],
            ['385', 'fizzbuzzWhizz'],
        ];
    }
}

