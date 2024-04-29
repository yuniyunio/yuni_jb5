<?php
 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TambahController;
use App\Http\Controllers\HomeController;
 
 
Route::get('/', [HomeController::class, 'index'])->name('home');
 
Route::resource('/product', ProductController::class);

Route::get('/tambah',[TambahController::class, 'tambah']);