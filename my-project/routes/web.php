<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/', [BookController::class, 'dashboard'])->name('dashboard');
Route::get('books', [BookController::class, 'index'])->name('books.index');
Route::get('books/create', [BookController::class, 'create'])->name('books.create');
Route::post('books', [BookController::class, 'store'])->name('books.store');



