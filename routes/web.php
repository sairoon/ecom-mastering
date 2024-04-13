<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EcommerceController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\SubsidiaryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;

Route::get('/',[EcommerceController::class, 'index'])->name('/');
Route::get('/shop',[EcommerceController::class, 'shop'])->name('shop');

Route::get('/cart',[EcommerceController::class, 'cart'])->name('cart');
Route::post('/add-cart',[CartController::class, 'addcart'])->name('add-cart');
Route::get('/show-cart',[CartController::class, 'showCart'])->name('show-cart');
Route::post('/update-cart',[CartController::class, 'updateCart'])->name('update-cart');
Route::get('/delete-cart/{id}',[CartController::class, 'deleteCart'])->name('delete-cart');

Route::get('/checkout',[EcommerceController::class, 'checkout'])->name('checkout');
Route::get('/contact_us',[EcommerceController::class, 'contact_us'])->name('contact_us');

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/category', [/*App\Http\Controllers\*/CategoryController::class, 'category'])->name('category');
Route::post('/new-category', [/*App\Http\Controllers\*/CategoryController::class, 'saveCategory'])->name('new-category');
Route::get('/status/{id}', [/*App\Http\Controllers\*/CategoryController::class, 'status'])->name('status');
/*Route::get('/editCategory/{id}', [CategoryController::class, 'editCategory'])->name('editCategory');*/
Route::get('/delete/{id}', [/*App\Http\Controllers\*/CategoryController::class, 'delete'])->name('delete');

Route::get('/company', [/*App\Http\Controllers\*/CompanyController::class, 'company'])->name('company');
Route::post('/new-company', [/*App\Http\Controllers\*/CompanyController::class, 'saveCompany'])->name('new-company');
Route::get('/status2/{id}', [/*App\Http\Controllers\*/CompanyController::class, 'status2'])->name('status2');
Route::get('/editCompany/{id}', [/*App\Http\Controllers\*/CompanyController::class, 'editCompany'])->name('editCompany');
Route::get('/delete2/{id}', [/*App\Http\Controllers\*/CompanyController::class, 'delete2'])->name('delete2');

Route::get('/subsidiary', [SubsidiaryController::class, 'index'])->name('subsidiary');
Route::post('/new-subsidiary', [SubsidiaryController::class, 'saveSubsidiary'])->name('new-subsidiary');
Route::get('/status3/{id}', [SubsidiaryController::class, 'status3'])->name('status3');
Route::get('/delete3/{id}', [SubsidiaryController::class, 'delete3'])->name('delete3');

Route::get('/add-product', [ProductController::class, 'index'])->name('add-product');
Route::post('/new-product', [ProductController::class, 'saveProduct'])->name('new-product');
Route::get('/manage-product', [ProductController::class, 'manageProduct'])->name('manage-product');
Route::get('/status-product/{id}', [ProductController::class, 'statusProduct'])->name('status-product');
Route::get('/delete-product/{id}', [ProductController::class, 'deleteProduct'])->name('delete-product');
