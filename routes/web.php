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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', function () {
    
    return view('admin');
})->middleware('checkStatus');

Route::get('/admin/products', 'App\Http\Controllers\ProductsController@getAllProducts');

Route::post('/loginadmin','App\Http\Controllers\AdminController@loginAdmin');