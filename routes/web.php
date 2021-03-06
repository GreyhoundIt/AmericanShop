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

use App\Http\Controllers\ProductsController;

use Illuminate\Support\Facades\Route;

Route::get('categories/{slug}', 'CategoriesController@show')->name('categories.show');
Route::get('products/{id}', 'ProductsController@show')->name('products.show');
Route::get('products/related/{id}', 'ProductsController@related')->name('products.related');

