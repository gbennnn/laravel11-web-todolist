<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Todo\TodoController;
use App\Http\Controllers\Hello\HelloController;

Route::get('/', [TodoController::class, 'index']); // mengakses method index dari TodoController
Route::post('/', [TodoController::class, 'store']); // mengakses method index dari TodoController

// Membuat route baru dengan nama /coba (localhost:8000/coba)
Route::get('/coba', function () {
    return view('coba.hello'); // return view dari (coba/hello.blade.php)
});

// Membuat route baru dengan nama coba/hello (localhost:8000/coba/hello)
Route::get('/coba/hello', function () {
    return 'Hello, World!'; // return string 'Hello, World!'
});

// mengakses controller HelloController method index
Route::get('/hello', [HelloController::class, 'index']); // mengakses method index dari HelloController

// mengakses controller HelloController method hello
Route::get('/demo', [HelloController::class, 'hello']);
