<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mi-nombre', function () {
    return "Jose";
});

Route::get('/php-basico', function () {
    return "jose";
});
