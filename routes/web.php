<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Http\Controllers\ProductController;

Auth::routes();
Route::get('/product/delete', [ProductController::class, 'delete'])->name("product.delete");
Route::get('/product/edit', [ProductController::class, 'edit'])->name("product.edit");
Route::get('/product/add', [ProductController::class, 'addProduct'])->name("product.add");
Route::post('/product', [ProductController::class, 'postProduct'])->name("product.store");
Route::post('/product/save', [ProductController::class, 'saveProduct'])->name("product.saved");

Route::get('/product', [ProductController::class, 'view'])->name("product.view");
Route::get('/', [ProductController::class, 'view']);
Route::get('/home', 'HomeController@index')->name('home');
