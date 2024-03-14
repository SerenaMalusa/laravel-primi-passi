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

Route::get('/', function () {
    $title = 'La mia homepage!';
    $paragraph = 'Benvenuti, welcome, bienvienue...';
    $greetings = config('greetings');
    return view('homepage', compact('title', 'paragraph', 'greetings'));
});
