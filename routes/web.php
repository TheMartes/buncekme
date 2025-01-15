<?php

use App\Http\Controllers\Home;
use App\Http\Controllers\Misc;
use App\Http\Controllers\Writing;
use Illuminate\Support\Facades\Route;

Route::get('/', [Home::class, 'index']);

# Writing
Route::get('/writing', [Writing::class, 'index']);
Route::get('/writing/{slug}', [Writing::class, 'show']);

# Misc
Route::get('/misc', [Misc::class, 'index']);
Route::get('/misc/{slug}', [Misc::class, 'show']);
