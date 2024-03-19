<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('posts', [
        'posts' => Post::all(),
        'categories' => Category::all()
    ]);
});

Route::get('/posts/{post:slug}', function (Post $post) { // Post::where('slug', $post)
    return view('post', [
            'post' => $post
        ]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    return view('posts', [
        'posts' => $category->posts,
        'currentCategory' => $category,
        'categories' => Category::all()
    ]);
});

Route::get('/authors/{user:name}', function (User $user) {
    return view('posts', [
        'posts' => $user->posts
    ]);
});
