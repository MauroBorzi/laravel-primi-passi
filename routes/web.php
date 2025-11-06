<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $info = "teso a caso";

    return view('home', compact("info"));
});
