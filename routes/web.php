<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('index', [PostController::class, 'index']);
Route::get('index/{id}', [PostController::class, 'show'])->name('show');

Route::get('add', [PostController::class, 'add']);
Route::post('add', [PostController::class, 'create'])->name('create');

Route::get('edit/{id}', [PostController::class, 'edit'])->name('edit');
Route::post('update/{id}', [PostController::class, 'update'])->name('update');

Route::get('delete/{id}', [PostController::class, 'delete'])->name('delete');
