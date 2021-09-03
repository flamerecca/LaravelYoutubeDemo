<?php

use Illuminate\Support\Facades\Request;
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

Route::get('/fizzbuzz/{input}', function (Request $request, string $input) {
    $output = "";
    if ($input == 0) {
        return "0";
    }
    if ($input % 11 == 0) {
        $output .= "fizz";
    }
    if ($input % 5 == 0) {
        $output .= "buzz";
    }
    if ($input % 7 == 0) {
        $output .= "Whizz";
    }
    if ($output != "") {
        return $output;
    } else {
        return $input;
    }
});

Route::get('/order/{price}', function (Request $request, string $price) {
    if($price < 50 || $price > 50000){
        return -1;
    }
    if ($price >= 5000) {
        return $price * 0.8;
    }
    if ($price >= 3000) {
        return $price * 0.95;
    }
    return $price;
});

Route::get('/now', function(){
    return now()->format('Y-m-d');
});
