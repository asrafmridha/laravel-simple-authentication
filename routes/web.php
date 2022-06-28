<?php

use Facade\FlareClient\View;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('farming', function () {

    return view('farming');
    
});

Route::get('rooftop', function () {
       return view('rooftop');
});

Route::get('index', function () {

    return view('dashboard');
    
});

Route::get('contact', function () {

    return view('contact');
    
});

Route::get('agro', function () {
     return view('agriculture');
});










