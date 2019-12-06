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

    Route::get('/ganti-password', 'UsersController@edit')->name('users.edit');
    Route::patch('/update-password/{user}', 'UsersController@update')->name('users.update');

    Route::get('/ubah-kontak', 'ContactsController@edit')->name('contacts.edit');
    Route::patch('/update-kontak/{contact}', 'contactsController@update')->name('contacts.update');

    Route::resource('/sliders', 'SlidersController');
    Route::resource('/kategori', 'CategoriesController');
    Route::resource('/testimoni', 'TestimonialsController');
    Route::resource('/brands', 'BrandsController');
});

Route::get('/{any}', 'CategoriesController@show')->name('categories.show');
Route::get('/produk/{product}/{nama_produk}', 'ProductsController@show')->name('products.show');