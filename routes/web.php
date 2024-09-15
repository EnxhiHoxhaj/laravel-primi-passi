<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $data = [
        'title'=> 'Home Page',
        'hello_word'=> 'Welcome to my first Laravel project',
        'tv_series'=> ['Game of Thrones', 'The Witcher', 'Dark', 'Breaking Bad', 'Lost', 'Friends'],
    ];
    return view('home', $data);
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');


