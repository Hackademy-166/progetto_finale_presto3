<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;

// ROTTE PUBLIC
Route::get('/', [PublicController::class, 'home'])->name('homepage');
Route::get('/contact-us', [PublicController::class, 'contact_us'])->name('contact');
Route::post('/contact/submit', [PublicController::class, 'invioForm'])->name('submit'); 

// ROTTE PER ARTICOLI
Route::get('/articles/create', [ArticleController::class, 'create'])->name('articles.create')->middleware('auth');
Route::get('/articles/index', [ArticleController::class, 'index'])->name('articles.index');
Route::get('/articles/show/{article}', [ArticleController::class, 'show'])->name('articles.show');
Route::get('/articles/category/{category}', [ArticleController::class, 'category_page'])->name('categories-index');

// ROTTE REVISORI
Route::get('/revisor/dashboard', [RevisorController::class, 'index'])->name('revisor.dashboard');

