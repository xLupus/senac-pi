<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {return view('welcome');});
Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create'); //Abre o formulario
Route::post('/category/create',[CategoryController::class, 'store'])->name('category.store'); //Os dados dos formularios sao mandados pra ca
Route::get('/category/edit/{category}', [CategoryController::class, 'edit'])->name('category.edit');
Route::put('/category/edit/{category}', [CategoryController::class, 'update'])->name('category.update');
Route::get('category/destroy/{category}', [CategoryController::class, 'destroy'])->name('category.destroy');
