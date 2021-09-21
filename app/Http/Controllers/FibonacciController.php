<?php

namespace App\Http\Controllers;

use App\Traits\MagicGetSetTrait;
use Illuminate\Http\Request;
use Illuminate\View\View;

class FibonacciController extends Controller
{
    use MagicGetSetTrait; // Use our Magic Getter Setter
    /**
     * fibonacci
     *
     * @param  int $num
     * @return int
     */
    public function fibonacci(int $num = 5) : int {
        $this->setPreviousFibonacci(0); // The value of the previous fibonacci number
        $this->setFibonacci(1); // Current Fibonacci Number
        for ($i=1; $i<$num; $i++) {
            $fib = $this->getFibonacci(); // Store the current fibonacci number
            $this->setFibonacci($fib + $this->getPreviousFibonacci()); // Add the previous 2 numbers together
            $this->setPreviousFibonacci($fib); // Set the previous fibonacci number
        }
        return $this->getFibonacci();
    }
    /**
     * fibonacci
     *
     * @param  int $num
     * @return view
     */
    public static function fibonacciView(int $num = 5) : View {
        return view('fibonacci', ["fibonacci"=>(new Controller)->fibonacci($num)]);
    }
}
