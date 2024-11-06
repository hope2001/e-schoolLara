<?php

use Illuminate\Support\Facades\Route;

Route::get('/las', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('landing');
});
