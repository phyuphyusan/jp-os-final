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
Route::get('/','FrontendController@home')->name('home');

Route::get('itemdetail/{item}','FrontendController@itemdetail')->name('itemdetail');

Route::get('cart','FrontendController@cart')->name('cart');

Route::get('dashboard', 'BackendController@dashboard')->name('dashboard');

Route::resource('items','ItemController');//want to CRUD

Route::resource('categories','CategoryController');

<<<<<<< HEAD
Route::resource('brands','BrandController');
=======
// route group // middleware
// Route::middleware(['auth','role:admin'])->group(function () {
>>>>>>> added a new file

Route::resource('subcategories','SubcategoryController');

<<<<<<< HEAD
=======
	Route::resource('items', 'ItemController'); // resource ဆိုရင် @method ထည့်ပေးစရာမလိုဖူး

	Route::resource('brands', 'BrandController');

	Route::resource('categories', 'CategoryController');

	Route::resource('subcategories', 'SubcategoryController');

	Route::resource('orders','OrderController');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
>>>>>>> added a new file
