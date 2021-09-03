<?php

namespace Tests\Demo;

use Tests\TestCase;

class UnionTypeTest extends TestCase
{

    public function add(int $input1, int $input2): int
    {
        return $input1 + $input2;
    }

    /**
     * @test
     */
    public function unionType()
    {
        $this->assertEquals(2, $this->add());
    }


}
