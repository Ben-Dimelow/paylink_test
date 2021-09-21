<?php

namespace Tests\Feature;

use App\Http\Controllers\FizzBuzzController;
use App\Models\FizzBuzzOption;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FizzBuzzTest extends TestCase
{
    /**
     * Test fizz buzz option returns
     *
     * @return void
     */
    public function testFizzBuzzOption()
    {
        // Test FizzBuzzOption Model
        $option = new FizzBuzzOption(3, "Fizz");
        // Test
        $this->assertNotEquals($option->checkDivisible(5), "Fizz");
        $this->assertEquals($option->checkDivisible(9), "Fizz");
    }

    /**
     * Test Fizz Buzz Option Returns
     *
     * @return void
     */
    public function testFizzBuzzController()
    {
        $response = $this->get('/fizzbuzz');
        $response->assertViewHas('outputs');
        $response->assertStatus(200);
    }
}
