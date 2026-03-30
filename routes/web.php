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

Route::get('ideas', function () {
    // $ideas = Idea::where('state', 'pending')->get(); // Eloquent ORM
    $ideas = Idea::query()
        ->when(request('state'), function ($query, $state) {
            $query->where('state', $state);
        })
        ->get();
    return view('ideas.index', compact('ideas'));
});

Route::post('ideas', function () {
    $idea = request('idea');
    Idea::create([
        'description' => $idea,
        'state' => 'pending',
    ]);
    return redirect('ideas');
});

Route::get('delete-ideas', function () {
    Idea::truncate();
    return redirect('ideas');
});