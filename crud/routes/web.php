<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/products',[ProductController::class,'index']);
Route::get('/products',[ProductController::class,'index'])->name('product.index');
Route::get('/products/create',[ProductController::class,'create'])->name('product.create');
Route::post('/products',[ProductController::class,'store'])->name('product.store');
Route::get('/products/{product}/edit',[ProductController::class,'edit'])->name('product.edit');
Route::put('/products/{product}/update',[ProductController::class,'update'])->name('product.update');
Route::delete('/products/{product}/delete',[ProductController::class,'delete'])->name('product.delete');
