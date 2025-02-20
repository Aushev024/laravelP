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

//Route::get('/', [\App\Http\Controllers\Posts::class, 'index']);
Route::get('/posts', [\App\Http\Controllers\Posts::class, 'index']);
Route::get('/posts/create', [\App\Http\Controllers\Posts::class, 'create']);
Route::get('/posts/{id}', [\App\Http\Controllers\Posts::class, 'show']);
Route::post('/posts', [\App\Http\Controllers\Posts::class, 'store']);

