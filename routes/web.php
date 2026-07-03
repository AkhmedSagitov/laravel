<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Posts\CommentController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::view('/', 'home.index')->name('home');
Route::redirect('/user', '/user/posts')->name('user');
Route::get('/test', [TestController::class, 'test']);


Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog/{post}', [BlogController::class, 'show'])->name('blog.show');
Route::get('/blog/{post}/like', [BlogController::class, 'like'])->name('blog.like');


Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'store'])->name('login.store');
    Route::get('/login/{user}/confirm', [LoginController::class, 'confirm'])->name('login.confirm');
    Route::post('/login/{user}/confirm', [LoginController::class, 'confirm'])->name('login.confirm');
});




Route::prefix('user')->as('user.')->group(base_path('routes/user.php'));

Route::prefix('admin')->as('admin.')->group(base_path('routes/admin.php'));



Route::resource('posts/{post}/comments', CommentController::class)->only([
    'show', 'index',
]);

//Route::resource('posts', PostController::class)->only([
//
//show index
//]);

Route::fallback(function () {
    return view('404');
});

