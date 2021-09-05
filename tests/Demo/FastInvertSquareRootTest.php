<?php

namespace Tests\Demo;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class FastInvertSquareRootTest extends TestCase
{
    /**
     * @test
     */
    public function example()
    {
        dd($this->invSquareRoot(16.0));
    }

    public function invSquareRoot(float $input)
    {
        $x = $input * 0.5;
        $i = unpack("i", pack("f", 16.0));
        $j = 0x5f3759df - ($i[1] >> 1);
        $return = unpack("f", pack("i", $j));
        $return = $return[1];
        $return = $return * (1.5 - ($x * $return * $return));
        return $return * (1.5 - ($x * $return * $return));
    }
}
