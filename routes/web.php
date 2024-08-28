<?php

use App\Http\Controllers\AccueilController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\TeamController;
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

/*
Route::get('/', function () {
    return view('welcome');

});*/
Route::get('/', [AccueilController::class, 'index'])->name('index');

// Routes pour le CRUD des articles
Route::resource('articles', ArticleController::class);
Route::resource('categories', CategorieController::class);
Route::resource('comments', CommentController::class);
Route::resource('teams', TeamController::class);
