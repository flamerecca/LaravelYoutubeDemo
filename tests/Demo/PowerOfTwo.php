<?php

namespace Tests\Demo;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PowerOfTwo extends TestCase
{
    /**
     * @test
     */
    public function example()
    {
        dd($this->isPowerOfTwo(16));
    }

    public function isPowerOfTwo($n): bool
    {
        if($n == 0 ){
            return true;
        }
        if(($n & ($n -1)) == 0){
            return true;
        }
        return false;
    }
}
