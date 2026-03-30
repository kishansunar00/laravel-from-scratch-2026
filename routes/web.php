<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $data = [
        'greeting' => 'Hello',
        'person' => request('name', 'Buddy!'),
        'html' => '<strong>Bold</strong>',
        'ideas' => session()->get('ideas', []),
    ];
    return view('welcome', $data);
});
Route::view('/about', 'about');
Route::view('/contact', 'contact');
Route::view('/idea', 'idea');
Route::post('/ideas', function () {
    $idea = request('idea');
    session()->push('ideas', $idea);
    return redirect('/');
});