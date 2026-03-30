<?php

use Illuminate\Support\Facades\Route;
use App\Models\Idea;

Route::get('/', function () {
    $data = [
        'greeting' => 'Hello',
        'person' => request('name', 'Buddy!'),
        'html' => '<strong>Bold</strong>'
    ];

    return view('welcome', $data);
});

Route::view('/about', 'about');
Route::view('/contact', 'contact');
Route::get('/idea', function () {
    // $ideas = Idea::where('state', 'pending')->get(); // Eloquent ORM
    $ideas = Idea::query()
        ->when(request('state'), function ($query, $state) {
            $query->where('state', $state);
        })
        ->get();
    return view('idea', compact('ideas'));
});

Route::post('/ideas', function () {
    $idea = request('idea');
    Idea::create([
        'description' => $idea,
        'state' => 'pending',
    ]);
    return redirect('/idea');
});
Route::get('/delete-ideas', function () {
    Idea::truncate();
    return redirect('/idea');
});