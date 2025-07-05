<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\RevisorController;

// ROTTE PUBLIC
Route::get('/', [PublicController::class, 'home'])->name('homepage');
// ROTTA CONTATTACI
Route::get('/contact-us', [PublicController::class, 'contact_us'])->name('contact')->middleware('auth');
Route::post('/contact/submit', [PublicController::class, 'invioForm'])->name('submit');
// ROTTA SEARCH
Route::get('/search/article', [PublicController::class, 'search'])->name('search');

// ROTTE PER ARTICOLI
Route::get('/articles/create', [ArticleController::class, 'create'])->name('articles.create')->middleware('auth');
Route::get('/articles/index', [ArticleController::class, 'index'])->name('articles.index'); // ricordarsi di mettere le frecctte per cambio pagina
Route::get('/articles/show/{article}', [ArticleController::class, 'show'])->name('articles.show');
Route::get('/articles/category/{category}', [ArticleController::class, 'category_page'])->name('categories-index');
Route::get('/articles/edit/{article}', [ArticleController::class, 'edit'])->name('articles.edit')->middleware('auth');
Route::delete('/articles/delete/{article}', [ArticleController::class, 'destroy'])->name('articles.destroy')->middleware('auth');

// ROTTE UTENTE
Route::get('/dashboard/{user}', [UserController::class, 'dashboard'])->name('dashboard')->middleware('auth'); // ??rotta paremtrica o no?
Route::get('/profile/create', [UserController::class, 'create'])->name('profile.create')->middleware('auth'); 
Route::get('/profile/edit/{profile}', [UserController::class, 'edit'])->name('profile.edit')->middleware('auth');
Route::delete('/user/delete/{user}', [UserController::class, 'destroy'])->name('user.destroy')->middleware('auth');

// ROTTE REVISORI
Route::get('/make/revisor/{user}', [RevisorController::class, 'makeRevisor'])->name('make-revisor');
Route::get('/reject/revisor/{user}', [RevisorController::class, 'rejectRevisor'])->name('reject-revisor');
Route::get('/revisor/dashboard', [RevisorController::class, 'index'])->name('revisor.dashboard')->middleware('isRevisor'); // ??rotta paremtrica o no?
Route::patch('/accept/{article}', [RevisorController::class, 'accept'])->name('accept')->middleware('isRevisor');
Route::patch('/reject/{article}', [RevisorController::class, 'reject'])->name('reject')->middleware('isRevisor');
Route::patch('/change/{article}', [RevisorController::class, 'changeStatus'])->middleware('isRevisor')->name('change');
Route::get('/revisor/revisor-show/{article}', [RevisorController::class, 'revisorShow'])->name('revisor.show')->middleware('isRevisor'); 


// ROTTE LINGUE
Route::post('/lingua/{lang}', [PublicController::class, 'setLanguage'])->name('setLocale');





