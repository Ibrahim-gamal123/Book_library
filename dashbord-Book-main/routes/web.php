<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\AuthController;

Route::resource('books', BookController::class);

Route::get('/', [BookController::class, 'dashboard'])->name('dashboard');
Route::get('/books', [BookController::class, 'index'])->name('books.index');
Route::get('/prices', [BookController::class, 'prices'])->name('books.prices');
Route::get('/average-price', [BookController::class, 'averagePrice'])->name('books.averagePrice');
Route::get('authors', [AuthorController::class, 'index'])->name('authors.index');
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::resource('authors', AuthorController::class);