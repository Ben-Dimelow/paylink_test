<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\FibonacciController;
use App\Http\Controllers\FizzBuzzController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/fizzbuzz', function () {
    return view('fizzbuzz', ["outputs"=>(new FizzBuzzController)->fizzBuzz()]);
});

Route::get('/fibonacci', function ($count) {
    return FibonacciController::fibonacciView($count);
});
