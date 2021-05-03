<?php

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

// Route::get('/', function () {
//     return view('test');
// });


// Route::get('/hello', function() {
//     return "Hello";
// });

// Route::get('/vue', function() {
//     return view('testvue');
// });

Route::get('/{any}', function () {
    return view('testvue');
  })->where('any', '.*');