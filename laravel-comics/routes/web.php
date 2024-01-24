<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    $dati = config("data.fumetti");
    return view('home', compact('dati'));
})->name("home");
