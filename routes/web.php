<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\RevisorController;

// ROTTE PUBLIC
Route::get('/', [PublicController::class, 'home'])->name('homepage');
Route::get('/contact-us', [PublicController::class, 'contact_us'])->name('contact')->middleware('auth');
Route::post('/contact/submit', [PublicController::class, 'invioForm'])->name('submit');
// ROTTA SEARCH
Route::get('/search/article', [PublicController::class, 'search'])->name('search');

// ROTTE PER ARTICOLI
Route::get('/articles/create', [ArticleController::class, 'create'])->name('articles.create')->middleware('auth');
Route::get('/articles/index', [ArticleController::class, 'index'])->name('articles.index');
Route::get('/articles/show/{article}', [ArticleController::class, 'show'])->name('articles.show');
Route::get('/articles/category/{category}', [ArticleController::class, 'category_page'])->name('categories-index');

// ROTTE UTENTE
Route::get('/dashboard/{user}', [UserController::class, 'dashboard'])->name('dashboard')->middleware('auth');

// ROTTE REVISORI
Route::get('/make/revisor/{user}', [RevisorController::class, 'makeRevisor'])->name('make-revisor');
Route::get('/revisor/dashboard', [RevisorController::class, 'index'])->name('revisor.dashboard')->middleware('isRevisor');
Route::patch('/accept/{article}', [RevisorController::class, 'accept'])->name('accept');
Route::patch('/reject/{article}', [RevisorController::class, 'reject'])->name('reject');





