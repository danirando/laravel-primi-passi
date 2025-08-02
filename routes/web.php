<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $informazioni = "testo vario";
    return view('home', compact('informazioni'));
});

Route::get('/about', fn () => view('about'))->name('about');
Route::get('/contacts', fn () => view('contacts'))->name('contacts');
