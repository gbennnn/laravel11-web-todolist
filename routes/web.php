<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Membuat route baru dengan nama /coba (localhost:8000/coba)
Route::get('/coba', function () {
    return view('coba.hello'); // return view dari (coba/hello.blade.php)
});

// Membuat route baru dengan nama coba/hello (localhost:8000/coba/hello)
Route::get('/coba/hello', function () {
    return 'Hello, World!'; // return string 'Hello, World!'
});