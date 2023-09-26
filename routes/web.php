<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Event;
use App\Http\Controllers\ProductController;


Route::get('/', [Event::class, 'index']);
Route::post('/store', Event::class . '@store')->name('event.store');
Route::post('/edit', Event::class . '@edit')->name('event.edit');
Route::get('/event', [Event::class, 'index']);
Route::get('/event/{id}', [Event::class, 'index']);
