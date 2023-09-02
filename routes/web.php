<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\IndexController;//AdminController
use App\Http\Controllers\AdminController;//AdminController
use App\Http\Controllers\UserController;//AdminController
use App\Http\Controllers\CategoryController;//AdminController
//
//OrderController
use App\Http\Controllers\ClientController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;



// Route::get('/order/products/{id}','OrderController@products');
route::get('/order/products/{id}', [OrderController::class, 'products']);//ProductController
route::get('/order/destroy/{id}', [OrderController::class, 'destroy']);//ProductController


route::get('/order/{id}', [OrderController::class, 'index'])->name('order.index');//ProductController
route::get('/order', [OrderController::class, 'create']);//ProductController

route::get('/client', [ClientController::class, 'index'])->name('client.index');
route::get('/client/create', [ClientController::class, 'create']);
route::post('/client/store', [ClientController::class, 'store']);
route::post('/order/store', [OrderController::class, 'store']);//ProductController
route::get('/product', [ProductController::class, 'index'])->name('product.index');
route::get('/product/create', [ProductController::class, 'create']);
route::post('/product/store', [ProductController::class, 'store']);
route::get('/product/create', [ProductController::class, 'create']);
// Route::resource('client', ClientController::class)->except('show');

// Route::post('/appointments', 'IndexController@store')->name('appointments.store');

route::get('/category', [CategoryController::class, 'index'])->name('categories.index');
route::get('/category/create', [CategoryController::class, 'create']);
route::post('/category/store', [CategoryController::class, 'store']);


route::get('/users', [UserController::class, 'index'])->name('user.index');

Route::resource('users', UserController::class);
route::post('/users/store', [UserController::class, 'store']);



Route::get('/dashboard', [IndexController::class, 'index']);
Route::get('/admin/login', [AdminController::class, 'index']);
Route::post('/login/store', [AdminController::class, 'login']);
// route('/',function(){
//     return
// })

// Route::post('/login/store', 'AdminController@login')->name('admin-login');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
