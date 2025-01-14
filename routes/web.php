<?php

use App\Http\Controllers\Home;
use App\Http\Controllers\Writings;
use Illuminate\Support\Facades\Route;

Route::get('/', [Home::class, 'index']);
Route::get('/writing', [Writings::class, 'index']);
Route::get('/writing/{slug}', [Writings::class, 'show']);
