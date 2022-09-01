<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {return view('welcome');});
Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create'); //Abre o formulario
Route::post('/category/create',[CategoryController::class, 'store'])->name('category.store'); //Os dados dos formularios sao mandados pra ca
