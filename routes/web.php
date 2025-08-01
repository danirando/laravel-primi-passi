<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', fn () => view('about'))->name('about');
Route::get('/contacts', fn () => view('contacts'))->name('contacts');
