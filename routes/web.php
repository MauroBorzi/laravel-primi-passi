<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $info = "teso a caso";

    return view('home', compact("info"));
})->name("home");

Route::get('/about', function () {

    $info = "teso a caso";

    return view('about', compact("info"));
})->name("about");

Route::get('/aboutYou', function () {

    $info = "teso a caso";

    return view('aboutYou', compact("info"));
})->name("aboutYou");
