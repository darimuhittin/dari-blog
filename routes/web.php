<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use App\Http\Controllers\PostCommentController;
use App\Http\Controllers\AdminPostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PostController::class, 'index']);
Route::get('/posts/{post:slug}', [PostController::class, 'show']);
Route::post('/posts/{post:slug}/comments', [PostCommentController::class, 'store']);
Route::delete('/posts/{post:slug}/comments/{comment:id}', [PostCommentController::class, 'delete']);
Route::get('/authors/{user:username}', function (User $user) {
    // Get the selected post by its slug and pass it to view that named 'post';
    return view('posts.index', [
        'posts' => $user->posts->load(['category'])
    ]);
});

Route::get('/login', [SessionController::class, 'create']);
Route::post('/login', [SessionController::class, 'store']);
Route::get('/register', [RegisterController::class, 'create']);
Route::post('/register', [RegisterController::class, 'store']);

Route::post('/logout', [SessionController::class, 'destroy']);

Route::get('/admin/posts', [AdminPostController::class, 'index']);
Route::get('/admin/posts/{post:id}/edit', [AdminPostController::class, 'edit']);
Route::patch('/admin/posts/{post:id}', [AdminPostController::class, 'update']);
Route::get('/admin/posts/create', [AdminPostController::class, 'create']);
Route::post('/admin/posts/store', [AdminPostController::class, 'store']);
