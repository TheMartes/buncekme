<?php

use App\Http\Controllers\Home;
use App\Http\Controllers\Writing;
use Illuminate\Support\Facades\Route;

Route::get('/', [Home::class, 'index']);
Route::get('/writing', [Writing::class, 'index']);
Route::get('/writing/{slug}', [Writing::class, 'show']);
