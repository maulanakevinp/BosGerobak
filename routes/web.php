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

//Auth

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
    'password.email' => false, // Email Verification Routes...
    'password.request' => false, // Email Verification Routes...
    'password.update' => false, // Email Verification Routes...
    'password.reset' => false, // Email Verification Routes...
]);

Route::get('/', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth','web']], function(){
    Route::post('/get-slider', 'SlidersController@get');
    Route::post('/get-testimoni', 'TestimonialsController@get');
    Route::post('/get-brands', 'BrandsController@get');
    Route::post('/get-kategori', 'CategoriesController@get');

    Route::get('/ganti-password', 'UsersController@edit')->name('users.edit');
    Route::patch('/update-password/{user}', 'UsersController@update')->name('users.update');

    Route::get('/ubah-kontak', 'ContactsController@edit')->name('contacts.edit');
    Route::patch('/update-kontak/{contact}', 'ContactsController@update')->name('contacts.update');

    Route::get('/ubah-utilitas', 'UtilitiesController@edit')->name('utilitas.edit');
    Route::patch('/utilitas/{utility}', 'UtilitiesController@update')->name('utilitas.update');

    Route::get('/tambah-produk/{kategori}', 'ProductsController@create')->name('products.create');
    Route::post('/produk', 'ProductsController@store')->name('products.store');
    Route::get('/ubah-produk/{produk}', 'ProductsController@edit')->name('products.edit');
    Route::patch('/produk/{produk}', 'ProductsController@update')->name('products.update');
    Route::delete('/produk/{produk}', 'ProductsController@destroy')->name('products.destroy');

    Route::resource('/sliders', 'SlidersController')->except(['create','show','edit']);
    Route::resource('/kategori', 'CategoriesController')->except(['create','show']);
    Route::resource('/testimoni', 'TestimonialsController')->except(['create','show','edit']);
    Route::resource('/brands', 'BrandsController')->except(['create','show','edit']);
    Route::resource('/images', 'ImagesController')->except(['index','create','show','edit']);
});

Route::get('/{any}', 'CategoriesController@show')->name('categories.show');
Route::get('/produk/{product}/{nama_produk}', 'ProductsController@show')->name('products.show');