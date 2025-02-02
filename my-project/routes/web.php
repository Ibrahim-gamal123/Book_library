<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('books/create', [BookController::class, 'create'])->name('books.create');
Route::post('books/store', [BookController::class, 'store'])->name('books.store');


Route::get('/', function () {
    return view('welcome');
});
