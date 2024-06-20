<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShelveController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//home
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/search', [HomeController::class, 'search'])->name('search');

//autor
Route::get('autor/listar',[AuthorController::class,'index'])->name('author.index');
Route::get('autor/create',[AuthorController::class,'create'])->name('create.autor');
Route::post('autor/store', [AuthorController::class,'store'])->name('author.store');
Route::get('autor/{author}',[AuthorController::class,'show'])->name('author.show');
Route::put('autor/{author}',[AuthorController::class,'update'])->name('author.update');
Route::delete('autor/{author}',[AuthorController::class,'destroy'])->name('author.destroy');
Route::get('autor/{author}/editar',[AuthorController::class,'edit'])->name('author.edit');

//libro
Route::get('libro/listar',[BookController::class,'index'])->name('book.index');
Route::get('libro/create',[BookController::class,'create'])->name('book.create');
Route::post('libro/store', [BookController::class,'store'])->name('book.store');
Route::get('libro/{book}',[BookController::class,'show'])->name('book.show');
Route::put('libro/{book}',[BookController::class,'update'])->name('book.update');
Route::delete('libro/{book}',[BookController::class,'destroy'])->name('book.destroy');
Route::get('libro/{book}/edit',[BookController::class,'edit'])->name('book.edit');

Route::get('estanteria/',[ShelveController::class,'show'])->name('shelve.show');