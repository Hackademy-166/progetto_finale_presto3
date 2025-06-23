<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'home'])->name('home');
