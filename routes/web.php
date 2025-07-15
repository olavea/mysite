<?php

use App\Models\User;
use App\Models\Post;
use Illuminate\Support\Facades\Route;


Route::get('omvei', function () {
    return view('omvei');
});

// Route::statamic('example', 'example-view', [
//    'title' => 'Example'
// ]);

Route::get('mineomveier', function () {
    $users = Post::all();

    dd($users);
});
