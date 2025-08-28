<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemoryController;
use App\Http\Controllers\SubmitMessageController;

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

Route::get('/share-memory', function () {
    return view('share-memory');
});

Route::get('/share-message', function () {
    return view('share-message');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::post('/share-messages', [SubmitMessageController::class, 'store'])->name('share-messages.store');