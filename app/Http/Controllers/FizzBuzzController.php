<?php

namespace App\Http\Controllers;

use App\Models\FizzBuzzOption;
use Illuminate\Http\Request;
use Illuminate\View\View;

class FizzBuzzController extends Controller
{

    /**
     * fizzBuzz
     *
     * This generates the fizzBuzz Array required for the test
     *
     * @return array
     */
    public function fizzBuzz() : Array {
        $this->start = 1; // Start Integer
        $this->end = 20; // End Integer
        /* Setup the options we want to use */
        $this->options = [
            new FizzBuzzOption(3, "Fizz"),
            new FizzBuzzOption(5, "Buzz")
        ];
        return $this->generateFizzBuzzData(); // Generate the data array
    }

    /**
     * generateFizzBuzzData
     *
     * @return Array
     */
    private function generateFizzBuzzData() : Array {
        $outputs = []; // Store the sequence
        for ($i=$this->start; $i<=$this->end; $i++) {
            $str = "";
            foreach ($this->options as $option) { // Loop through each fizz buzz option
                $str .= $option->checkDivisible($i);
            }
            if ($str === "") { // If the string is blank we just want to print the number
                $str = $i;
            }
            $outputs[] = $str; // Save to output
        }
        return $outputs;
    }
}
