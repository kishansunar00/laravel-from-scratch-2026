<?php

use Illuminate\Support\Facades\Route;
use App\Models\Idea;

Route::get('/', function () {
    // $ideas = Idea::where('state', 'pending')->get(); // Eloquent ORM
    $ideas = Idea::all(); // Eloquent ORM

    $data = [
        'greeting' => 'Hello',
        'person' => request('name', 'Buddy!'),
        'html' => '<strong>Bold</strong>',
        'ideas' => $ideas,
    ];

    return view('welcome', $data);
});

Route::view('/about', 'about');
Route::view('/contact', 'contact');
Route::view('/idea', 'idea');

Route::post('/ideas', function () {
    $idea = request('idea');
    Idea::create([
        'description' => $idea,
        'state' => 'pending',
    ]);
    return redirect('/');
});
Route::get('/delete-ideas', function () {
    session()->forget('ideas');
    return redirect('/');
});