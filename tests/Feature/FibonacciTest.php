<?php

namespace Tests\Feature;

use App\Http\Controllers\FibonacciController;
use Tests\TestCase;

class FibonacciTest extends TestCase
{

    /**
     * Test Fibonacci Returns
     *
     * @return void
     */
    public function testFibonacciController()
    {
        $test = new FibonacciController;
        $this->assertEquals($test->fibonacci(2), 1);
        $this->assertEquals($test->fibonacci(5), 5);
        $this->assertEquals($test->fibonacci(8), 21);
        $this->assertEquals($test->fibonacci(15), 610);
    }
}
