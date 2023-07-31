<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();

// METHOD - PATH - CONTROLLER, ACTION - ROUTE NAME
// https://laravel.com/docs/5.1/controllers#restful-resource-controllers
Route::get('/profile/{user}', [App\Http\Controllers\UserProfileController::class, 'index'])->name('profile.show');

Route::get('/post/create', [App\Http\Controllers\PostController::class, 'create'])->name('post.create');

Route::post('/post', [App\Http\Controllers\PostController::class, 'store'])->name('post.store');

Route::get('/post/{post}', [App\Http\Controllers\PostController::class, 'show'])->name('post.show');
