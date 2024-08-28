<?php

use App\Http\Controllers\AccueilController;
use App\Http\Controllers\AproposController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ReglementController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\VisionController;
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
Route::get('apropos/', [AproposController::class, 'index'])->name('apropos');
Route::get('vision/', [VisionController::class, 'index'])->name('vision');
Route::get('status/', [StatusController::class, 'index'])->name('status');
Route::get('reglement/', [ReglementController::class, 'index'])->name('reglement');
Route::get('contact/', [ContactController::class, 'index'])->name('contact');
//Route::get('apropos/', [AproposController::class, 'index'])->name('apropos');
//Route::get('contact/', [AproposController::class, 'index'])->name('apropos');

// Routes pour le CRUD des articles
Route::resource('articles', ArticleController::class);
Route::resource('categories', CategorieController::class);
Route::resource('comments', CommentController::class);
Route::resource('teams', TeamController::class);
