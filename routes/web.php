<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemoryController; // Import the controller class

Route::get('/', function () {
    return view('landing');
});

Route::get('/thanks', function () {
    return view('thanks');
});

Route::get('/messages', function () {
    return view('messages');
});

Route::get('/memories', [MemoryController::class, 'index']); // Route to a specific method