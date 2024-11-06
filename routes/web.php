<?php


use App\Http\Controllers\ControllerBooks;
use Illuminate\Support\Facades\Route;

Route::get('/', ControllerBooks::class . '@index');
Route::get('/add', ControllerBooks::class . '@add');
Route::post('/add/store', ControllerBooks::class . '@store')->name('books.store');

Route::get('/edit/{id}', ControllerBooks::class . '@edit');
Route::put('/edit/update/{id}', ControllerBooks::class . '@update')->name('books.update');
