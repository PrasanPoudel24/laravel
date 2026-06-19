<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mainlayout', function () {
    return view('mainlayout.layout');
});


Route::get('/mainhome', function () {
    return view('pages.mainhome');
});