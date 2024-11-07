<?php


use App\Http\Controllers\ControllerBooks;
use Illuminate\Support\Facades\Route;

//redirect from view to index
Route::get('/', ControllerBooks::class . '@index');

//redirect from view to add book and storage in database
Route::get('/add', ControllerBooks::class . '@add');
Route::post('/add/store', ControllerBooks::class . '@store')->name('books.store');

//redirect from view to edit book and update in database
Route::get('/edit/{id}', ControllerBooks::class . '@edit');
Route::put('/edit/update/{id}', ControllerBooks::class . '@update')->name('books.update');

//delete book from database
Route::get('/delete/{id}', ControllerBooks::class . '@delete')->name('books.delete');