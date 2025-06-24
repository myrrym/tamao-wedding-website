<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
});

Route::get('/thanks', function () {
    return view('thanks');
});

Route::get('/messages', function () {
    return view('messages');
});