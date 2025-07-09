<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MerekController;

Route::get('/', fn () => redirect('/products'));
Route::resource('products', ProductController::class);

Route::get('/', fn () => redirect('/mereks'));
Route::resource('mereks', MerekController::class);
