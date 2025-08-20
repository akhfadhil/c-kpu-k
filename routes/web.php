<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Homepage']);
});

Route::get('/upload', function () {
    return view('upload', ['title' => 'Upload', 'name' => 'KPU']);
});
