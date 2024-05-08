<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(PostController::class)->group(function () {
    Route::get('index', 'index');
    Route::get('index/{id}',  'show')->name('show');

    Route::get('add', 'add');
    Route::post('add', 'create')->name('create');

    Route::get('edit/{id}', 'edit')->name('edit');
    Route::post('update/{id}', 'update')->name('update');

    Route::get('delete/{id}', 'delete')->name('delete');
});
