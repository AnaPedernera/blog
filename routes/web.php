<?php

use Illuminate\Support\Facades\Route;
use App\Models\Tag;
use App\Models\Post;
use App\Models\User;



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



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/about', [App\Http\Controllers\PagesController::class, 'about']);
Route::get('/index', [App\Http\Controllers\PagesController::class, 'index']);

// Genero todas las rutas de las acciones de PostsController
Route::resource('posts', '\App\Http\Controllers\PostsController');
// Genero todas las rutas de las acciones de PostsController

Route::resource('tags', '\App\Http\Controllers\TagsController');