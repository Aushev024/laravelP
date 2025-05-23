<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Posts;
use App\Http\Controllers\Cars;


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

//Route::get('/', [\App\Http\Controllers\Posts::class, 'index']);
Route::get('/posts', [Posts::class, 'index']);
Route::get('/posts/create', [Posts::class, 'create'])->name('posts.create');
Route::post('/posts', [Posts::class, 'store']);
Route::get('/posts/{id}', [Posts::class, 'show'])->name('posts.show');
Route::get('/posts/{id}/edit', [Posts::class, 'edit']);
Route::put('/posts/{id}', [Posts::class, 'update'])->name('posts.update');
Route::delete('/posts/{id}', [Posts::class, 'destroy']);

Route::get('cars/trashed', [Cars::class, 'trashed'])->name('cars.trashed');
Route::put('cars/{car}/restore', [Cars::class, 'restore'])->name('cars.restore');
Route::resource('cars', Cars::class);

Route::resource('brands', \App\Http\Controllers\Brands::class);

