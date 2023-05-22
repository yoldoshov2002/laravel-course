<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;

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


Route::get('/', [PageController::class, 'main']);
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/service',[PageController::class, 'service'])->name('service');
Route::get('/projects', [PageController::class, 'projects'])->name('projects');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');


Route::resource('posts', PostController::class);

// Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
// Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');
// Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
// Route::post('/posts/create', [PostController::class, 'store'])->name('posts.store');
// Route::get('/posts/edit/{post}', [PostController::class, 'edit'])->name('posts.edit');
// Route::put('/posts/edit/{post}', [PostController::class, 'update'])->name('posts.update');
// Route::delete('/posts/delete/{post}', [PostController::class, 'delete'])->name('posts.delete');



