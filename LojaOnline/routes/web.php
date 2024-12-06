<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Rota para a página inicial
Route::get('/', [HomeController::class, 'index'])->name("home.index");

// Rota para a página "about"
Route::get('/about', [HomeController::class, 'about'])->name("home.about");
Route::get('/products', 'App\Http\Controllers\ProductController@index')->name("product.index");
Route::get('/products/{id}', 'App\Http\Controllers\ProductController@show')->name("product.show");