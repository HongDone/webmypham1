<?php

use Illuminate\Support\Facades\Route;

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
//user
Route::get('/', function () {
    return view('layouts.app');
});
//admin
use App\Http\Controllers\AdminController;

Route::get('/admin', [AdminController::class, 'index']);
Route::get('/admin/dashboard', [AdminController::class, 'show_dashboard']);
Route::get('/admin/product', [AdminController::class, 'show_product']);
Route::post('/adminlogin', [LoginController::class, 'admin_login']);
Auth::routes();


use App\Http\Controllers\ProductTypeController;
route::get('/admin/product_type', [ProductTypeController::class, 'index']);
Route::get('/admin/product_type/create', 'ProductTypeController@create');
Route::post('/admin/product_type/store', 'ProductTypeController@store');