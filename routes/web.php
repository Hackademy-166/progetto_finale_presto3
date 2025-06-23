<?php

use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'home'])->name('homepage');

// ROTTE PER ARTICOLI
Route::get('/articles/create', [ArticleController::class, 'create'])->name('articles.create')->middleware('auth');

