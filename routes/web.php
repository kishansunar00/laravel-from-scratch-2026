<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome', [
    'greeting' => 'Hello',
    'person' => request('name', 'Buddy!'),
    'html' => '<strong>Bold</strong>',
]);
Route::view('/about', 'about');
Route::view('/contact', 'contact');
