<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return view('helloWorld');
});

// Route::get('hello', 'HelloController');

// Route::get('hello', 'helloWorld');