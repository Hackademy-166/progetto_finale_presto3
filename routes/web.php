<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;

Route::get('/', [PublicController::class, 'home'])->name('homepage');

// ROTTE PER ARTICOLI
Route::get('/articles/create', [ArticleController::class, 'create'])->name('articles.create')->middleware('auth');
Route::get('/articles/index', [ArticleController::class, 'index'])->name('articles.index');
Route::get('/articles/show/{article}', [ArticleController::class, 'show'])->name('articles.show');
Route::get('/articles/category/{category}', [ArticleController::class, 'category_page'])->name('categories-index');

