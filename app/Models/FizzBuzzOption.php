<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FizzBuzzOption extends Model
{

    /**
     * __construct
     *
     * @param  mixed $divisible
     * @param  mixed $word
     * @return void
     */
    public function __construct($divisible, $word) {
        $this->divisible = $divisible;
        $this->word = $word;
    }

    /**
     * checkDivisible
     *
     * Check to see if this option is correct
     *
     * @param  int $num
     * @return string|null
     */
    public function checkDivisible(int $num) : ?string {
        return $num%$this->divisible===0 ? $this->word : null;
    }
}
