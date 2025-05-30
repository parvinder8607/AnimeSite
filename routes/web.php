<?php

use App\Http\Controllers\AnimeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ AnimeController::class, 'home']);
Route::get('/show/{title}', [ AnimeController::class, 'show'])->name('show');

Route::get('admin/dashboard')->middleware('can:isAdmin');